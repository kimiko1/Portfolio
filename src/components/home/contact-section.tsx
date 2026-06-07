import { Mail } from "lucide-react";
import Link from "next/link";

import { Card, CardContent } from "@/components/ui/card";

export function ContactSection() {
  return (
    <section
      id="contact"
      className="mx-auto w-full max-w-7xl px-6 pb-24 pt-12 sm:px-10 lg:px-16"
    >
      <Card className="border border-border/70 bg-foreground text-background shadow-[0_24px_90px_-38px_rgba(0,0,0,0.5)]">
        <CardContent className="flex flex-col gap-8 px-6 py-8 sm:px-10 sm:py-10 lg:flex-row lg:items-end lg:justify-between">
          <div className="max-w-2xl">
            <p className="text-sm uppercase tracking-[0.24em] text-background/60">
              Contact
            </p>
            <h3 className="mt-3 text-3xl font-semibold tracking-tight text-background sm:text-4xl">
              Tu veux un portfolio plus fort, une landing page plus crédible ou
              une interface plus propre.
            </h3>
            <p className="mt-4 text-base leading-8 text-background/70">
              Je peux t'aider à poser une direction visuelle claire et à la
              transformer en produit web concret.
            </p>
          </div>

          <Link
            href="mailto:contact@bastien.dev"
            className="inline-flex items-center justify-center gap-2 rounded-full bg-background px-6 py-3 text-sm font-medium text-foreground transition hover:opacity-90"
          >
            <Mail className="size-4" />
            contact@bastien.dev
          </Link>
        </CardContent>
      </Card>
    </section>
  );
}
