import { authOptions } from "@/lib/auth";
import { getServerSession } from "next-auth";
import { redirect } from "next/navigation";

type AppRole = "admin" | "teacher";

function normalizeRoleName(value: string | null | undefined) {
  return value?.trim().toLowerCase() ?? "";
}

function buildForbiddenUrl(role: AppRole) {
  return `/forbidden?required=${role}`;
}

export async function requireAuthenticatedUser() {
  const session = await getServerSession(authOptions);

  if (!session?.user?.email) {
    redirect("/login");
  }

  const sessionUser = session.user;
  const sessionEmail = sessionUser.email;

  if (!sessionEmail) {
    redirect("/");
  }

  return {
    id: sessionUser.id,
    email: sessionEmail.trim().toLowerCase(),
    name: sessionUser.name,
    role: sessionUser.role,
  };
}

export async function requireUserRole(role: AppRole) {
  const sessionUser = await requireAuthenticatedUser();
  const expectedRole = normalizeRoleName(role);
  const currentRole = normalizeRoleName(sessionUser.role);

  if (currentRole !== expectedRole) {
    redirect(buildForbiddenUrl(role));
  }

  return {
    id: sessionUser.id,
    email: sessionUser.email,
    name: sessionUser.name,
    role: sessionUser.role,
  };
}

export async function requireAdminRole() {
  return requireUserRole("admin");
}

export async function requireTeacherRole() {
  return requireUserRole("teacher");
}
