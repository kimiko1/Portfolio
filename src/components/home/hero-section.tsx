import { ArrowRight } from "lucide-react";
import Link from "next/link";

import { Badge } from "@/components/ui/badge";
import {
  Card,
  CardContent,
  CardDescription,
  CardHeader,
  CardTitle,
} from "@/components/ui/card";

import { heroStats, highlights } from "./home-data";

export function HeroSection() {
  return (
    <section className="mx-auto flex min-h-screen w-full max-w-7xl flex-col px-6 pb-20 pt-8 sm:px-10 lg:px-16">
      <header className="flex items-center justify-between border-b border-border/70 pb-6">
        <div>
          <p className="text-sm uppercase tracking-[0.28em] text-muted-foreground">
            Portfolio
          </p>
          <h1 className="mt-2 text-lg font-semibold">Bastien</h1>
        </div>

        <nav className="hidden items-center gap-6 text-sm text-muted-foreground md:flex">
          <a href="#services" className="transition hover:text-foreground">
            Services
          </a>
          <a href="#projets" className="transition hover:text-foreground">
            Projets
          </a>
          <a href="#contact" className="transition hover:text-foreground">
            Contact
          </a>
        </nav>
      </header>

      <div className="grid flex-1 items-center gap-16 py-16 lg:grid-cols-[1.2fr_0.8fr] lg:py-24">
        <div className="max-w-3xl">
          <Badge
            variant="outline"
            className="rounded-full border-border/80 bg-background/80 px-3 py-1 text-[0.72rem] uppercase tracking-[0.22em] text-muted-foreground backdrop-blur"
          >
            Disponible pour de nouveaux projets
          </Badge>

          <h2 className="mt-8 max-w-4xl text-5xl leading-none font-semibold tracking-tight text-balance sm:text-6xl lg:text-7xl">
            Je conçois des interfaces qui donnent envie de rester.
          </h2>

          <p className="mt-6 max-w-2xl text-base leading-8 text-muted-foreground sm:text-lg">
            Développeur front-end, je transforme une idée, une marque ou un
            produit en expérience web claire, rapide et mémorable.
          </p>

          <div className="mt-10 flex flex-col gap-4 sm:flex-row">
            <Link
              href="#projets"
              className="inline-flex items-center justify-center gap-2 rounded-full bg-primary px-6 py-3 text-sm font-medium text-primary-foreground transition hover:opacity-90"
            >
              Voir mes projets
              <ArrowRight className="size-4" />
            </Link>
            <Link
              href="#contact"
              className="inline-flex items-center justify-center rounded-full border border-border bg-background px-6 py-3 text-sm font-medium transition hover:bg-muted"
            >
              Discuter d'un projet
            </Link>
          </div>

          <div className="mt-10 flex flex-wrap gap-3">
            {highlights.map((item) => (
              <div
                key={item}
                className="rounded-full border border-border/80 bg-card px-4 py-2 text-sm text-muted-foreground shadow-sm"
              >
                {item}
              </div>
            ))}
          </div>
        </div>

        <div className="grid gap-4">
          <Card className="border border-border/70 bg-card/80 py-0 shadow-[0_24px_90px_-38px_rgba(0,0,0,0.45)] backdrop-blur">
            <CardHeader className="border-b border-border/70 py-6">
              <CardDescription>Positionnement</CardDescription>
              <CardTitle className="text-2xl">
                Un portfolio sobre, net et orienté impact.
              </CardTitle>
            </CardHeader>
            <CardContent className="grid gap-6 py-6">
              <div className="grid gap-2 sm:grid-cols-3 sm:gap-4">
                {heroStats.map((stat) => (
                  <div key={stat.label}>
                    <p className="text-3xl font-semibold">{stat.value}</p>
                    <p className="mt-1 text-sm text-muted-foreground">
                      {stat.label}
                    </p>
                  </div>
                ))}
              </div>

              <div className="rounded-2xl border border-border/70 bg-muted/40 p-5">
                <p className="text-sm leading-7 text-muted-foreground">
                  Je privilégie une direction visuelle précise, une hiérarchie
                  lisible et des composants réutilisables pour faire avancer le
                  produit sans dette inutile.
                </p>
              </div>
            </CardContent>
          </Card>
        </div>
      </div>
    </section>
  );
}
