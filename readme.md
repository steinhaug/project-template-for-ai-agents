# PHP Prosjektmal for AI-generering av Kode

Dette prosjektet er designet som en standardisert mal for PHP-utvikling med fokus på optimal AI-assistert kodegenerering. Målet er å skape et rammeverk hvor AI-agenter kan produsere konsistent, korrekt og vedlikeholdbar kode.

## Filosofi

AI-generert kode er bare så god som konteksten den får. Dette prosjektet implementerer strukturer og dokumentasjonsmetoder som sikrer at AI-agenter har tilgang til all nødvendig informasjon for å generere produktionsklar kode.

## Teknologistack

- **PHP** - Primær backend-teknologi
- **Composer** - Avhengighetshåndtering
- **Tailwind CSS v4** - Styling med innebygd dark mode
- **Twig** - Template engine
- **Node.js** - For frontend-verktøy (Tailwind kompilering)

## AI-optimaliserte Teknikker

### 1. Strukturert Dokumentasjon
- **Meta-filer**: `_meta.json` i alle template-mapper dokumenterer komponentparametere
- **AI-guider**: Spesialiserte `.md` filer for AI-agent instruksjoner
- **Konsistent navngivning**: Forutsigbare mønstre for mapper og filer

### 2. Intelligent Docblock-strategier
```php
/**
 * @ai-meta _meta.json files in template directories for component parameters
 * @ai-guide /templates/twig/_ai_guide.md Usage patterns and syntax
 */
```
AI-spesifikke tags i docblocks som peker mot relevant kontekst uten å forurense standard dokumentasjon.

### 3. Kontekst-rikt Template System
- **Twig-komponenter** med full parameterdokumentasjon
- **Elegant rendering-syntax**: `twig('@components/card.twig', $data)`
- **Automatisk path-resolving** og feilhåndtering

### 4. Progresiv Kompleksitet
Systemet støtter både enkle og avanserte brukstilfeller uten å komplisere grunnleggende operasjoner.

### 5. Vedlikeholdsstrategi
- **Dokumentert oppdateringsprosess** for å holde meta-informasjon synkronisert
- **Fremtidsrettet** for automatisering av dokumentasjonsgenerering

## Mappestruktur

```
/
├── templates/twig/          # Twig templates med AI-dokumentasjon
│   ├── components/          # Gjenbrukbare UI-komponenter
│   ├── base/               # Layout templates
│   ├── partials/           # Header, footer, etc.
│   └── _ai_guide.md        # AI-instruksjoner for template-bruk
├── tailwind/               # Tailwind source files
├── public_html/            # Web root
├── docs/                   # Prosjektdokumentasjon
└── node_modules/           # Frontend dependencies
```

## AI-vennlige Funksjoner

### Template Rendering
```php
// Enkel, konsistent syntax
echo twig('@components/button.twig', [
    'text' => 'Click me',
    'type' => 'primary'
]);
```

### Dark Mode Support
Automatisk dark mode i alle komponenter uten ekstra konfigurasjon.

### Dokumenterte Parametere
Alle komponenter har dokumenterte parametere i tilhørende `_meta.json` filer.

## Beste Praksis for AI-assistert Utvikling

### For AI-agenter som arbeider med dette prosjektet:

1. **Les meta-filer først** - Sjekk `_meta.json` før du foreslår komponentbruk
2. **Følg etablerte mønstre** - Bruk eksisterende konvensjoner for konsistens
3. **Oppdater dokumentasjon** - Ved endringer, oppdater tilhørende meta-filer
4. **Test komponentparametere** - Verifiser at alle obligatoriske parametere er inkludert

### Kommunikasjonsmodus-erkjennelse
Dette prosjektet er designet for utviklere som kommuniserer gjennom naturlig samtale fremfor strukturerte lister. AI-agenter bør være oppmerksomne på:
- **Diskusjonsmodus**: Utforsking av alternativer og idéutveksling
- **Kodemodus**: Spesifikke tekniske krav og implementasjonsdetaljer

Overgangssignaler til kodemodus inkluderer tekniske constraints, feilmeldinger, eller spesifikke implementasjonskrav.

## Komme i Gang

1. **Klon prosjektet**
2. **Installer avhengigheter**: `composer install && npm install`
3. **Kompiler CSS**: `npm run build`
4. **Les AI-guidene** i `/templates/twig/_ai_guide.md`
5. **Utforsk komponentene** via `_meta.json` filer

## Vedlikehold

Se `/docs/maintaining-twig-files.md` for fullstendig veiledning om hvordan holde meta-informasjon oppdatert ved endringer i templates.

## Fremtidige Forbedringer

- **Automatisk generering** av `_meta.json` fra template docblocks
- **Utvidet komponentbibliotek** med flere UI-elementer
- **Automatiserte tester** for template-parametere

---

**Mål**: Skape et miljø hvor AI kan generere produktionsklar PHP-kode med minimal menneskelig intervensjon, samtidig som koden forblir vedlikeholdbar og utvidbar.