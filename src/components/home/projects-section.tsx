import { Badge } from "@/components/ui/badge";
import { Card, CardContent } from "@/components/ui/card";

import { projects } from "./home-data";

export function ProjectsSection() {
  return (
    <section
      id="projets"
      className="mx-auto w-full max-w-7xl px-6 py-20 sm:px-10 lg:px-16"
    >
      <div className="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
        <div className="max-w-2xl">
          <p className="text-sm uppercase tracking-[0.24em] text-muted-foreground">
            Projets sélectionnés
          </p>
          <h3 className="mt-3 text-3xl font-semibold tracking-tight sm:text-4xl">
            Quelques directions possibles pour raconter ton travail avec plus de
            présence.
          </h3>
        </div>

        <p className="max-w-md text-sm leading-7 text-muted-foreground">
          Cette première version peut ensuite être branchée à de vrais cas
          clients, des captures, des liens live et une section à propos plus
          personnelle.
        </p>
      </div>

      <div className="mt-10 grid gap-6 lg:grid-cols-3">
        {projects.map((project, index) => (
          <Card
            key={project.name}
            className="border border-border/70 bg-card/80 py-0"
          >
            <CardContent className="p-0">
              <div className="aspect-[4/3] border-b border-border/70 bg-[linear-gradient(135deg,rgba(10,10,10,0.92),rgba(80,80,80,0.75))] p-6 text-white">
                <div className="flex h-full flex-col justify-between">
                  <Badge
                    variant="secondary"
                    className="w-fit rounded-full bg-white/12 px-3 text-white"
                  >
                    Projet 0{index + 1}
                  </Badge>
                  <div>
                    <p className="text-sm uppercase tracking-[0.18em] text-white/70">
                      {project.category}
                    </p>
                    <p className="mt-2 text-2xl font-semibold">
                      {project.name}
                    </p>
                  </div>
                </div>
              </div>
              <div className="p-6">
                <p className="text-sm leading-7 text-muted-foreground">
                  {project.summary}
                </p>
              </div>
            </CardContent>
          </Card>
        ))}
      </div>
    </section>
  );
}
