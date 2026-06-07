import {
  BriefcaseBusiness,
  Code2,
  Sparkles,
  type LucideIcon,
} from "lucide-react";

export const highlights = [
  "Interfaces modernes et responsives",
  "Développement Next.js et TypeScript",
  "Attention forte au détail produit",
];

export const heroStats = [
  {
    value: "3+",
    label: "univers produits explorés",
  },
  {
    value: "100%",
    label: "responsive et maintenable",
  },
  {
    value: "Next",
    label: "stack moderne et rapide",
  },
];

export type HomeService = {
  title: string;
  description: string;
  icon: LucideIcon;
};

export const services: HomeService[] = [
  {
    title: "Design produit",
    description:
      "Des interfaces claires, crédibles et orientées conversion, pensées pour le mobile comme pour le desktop.",
    icon: Sparkles,
  },
  {
    title: "Développement front-end",
    description:
      "Des expériences rapides et maintenables avec Next.js, React et un système d'interface cohérent.",
    icon: Code2,
  },
  {
    title: "Mise en ligne",
    description:
      "Un accompagnement jusqu'au déploiement pour livrer un site propre, performant et prêt à évoluer.",
    icon: BriefcaseBusiness,
  },
];

export const projects = [
  {
    name: "Plateforme d'apprentissage",
    category: "Produit web",
    summary:
      "Conception d'une interface fluide pour présenter des parcours, des avis et une expérience utilisateur plus engageante.",
  },
  {
    name: "Site vitrine premium",
    category: "Branding digital",
    summary:
      "Création d'une présence en ligne plus élégante avec une hiérarchie visuelle nette et des sections pensées pour convaincre vite.",
  },
  {
    name: "Dashboard métier",
    category: "Outil interne",
    summary:
      "Structuration d'un tableau de bord simple à lire pour piloter l'activité et réduire le bruit dans l'interface.",
  },
];
