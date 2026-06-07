import {
  Card,
  CardDescription,
  CardHeader,
  CardTitle,
} from "@/components/ui/card";

import { services } from "./home-data";

export function ServicesSection() {
  return (
    <section
      id="services"
      className="mx-auto w-full max-w-7xl px-6 py-20 sm:px-10 lg:px-16"
    >
      <div className="flex max-w-2xl flex-col gap-4">
        <p className="text-sm uppercase tracking-[0.24em] text-muted-foreground">
          Services
        </p>
        <h3 className="text-3xl font-semibold tracking-tight sm:text-4xl">
          Une approche simple: rendre le produit plus fort visuellement et plus
          agréable à utiliser.
        </h3>
      </div>

      <div className="mt-10 grid gap-6 md:grid-cols-3">
        {services.map((service) => {
          const Icon = service.icon;

          return (
            <Card
              key={service.title}
              className="border border-border/70 bg-card/80"
            >
              <CardHeader>
                <div className="mb-3 flex size-11 items-center justify-center rounded-2xl border border-border/70 bg-muted/50">
                  <Icon className="size-5" />
                </div>
                <CardTitle>{service.title}</CardTitle>
                <CardDescription className="leading-7">
                  {service.description}
                </CardDescription>
              </CardHeader>
            </Card>
          );
        })}
      </div>
    </section>
  );
}
