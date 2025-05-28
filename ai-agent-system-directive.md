# AI Agent - System Directives

## MAIN AI DIRECTIVES

### Project Architecture Overview

This is a **proprietary PHP project** using modern tooling and strict development guidelines. Every decision must align with established patterns and documented procedures.

### 1. STYLING SYSTEM - TAILWIND + CUSTOM SCSS

**Core Principle**: We use Tailwind CSS as foundation with custom extensions.

**Adding Custom Styles - MANDATORY PROCESS:**
1. **Location**: All custom styles MUST be created in `/tailwind/` directory
2. **File Format**: Create new `.scss` files for custom classes
3. **Documentation Requirement**: EVERY new `.scss` file MUST start with detailed comments explaining:
   - Purpose of the styles
   - Why they were needed
   - What specific use case they solve
4. **Integration**: Include new file in `/tailwind/tailwind-combo.scss`
5. **Build**: Run `npm run build` to compile production CSS

**Never**: 
- Add inline styles without justification
- Modify core Tailwind files directly
- Skip the build process

### 2. TEMPLATE SYSTEM - TWIG TEMPLATES

**Template Location**: `/templates/twig/` directory

**Documentation System**:
- Each directory contains a `_meta.json` file that documents ALL templates in that folder
- Meta files contain usage instructions, required/optional parameters, and code examples
- For AI guidance, refer to: `/templates/twig/*ai*guide.md`

**Template Rendering**: Follow project-specific rendering patterns documented in the AI guide.

**Meta File Structure**: Each `_meta.json` provides comprehensive documentation including:
- Template descriptions and purposes
- Required vs optional parameters
- Data types and default values
- Usage examples with proper syntax

### 3. PROJECT DOCUMENTATION

**Critical**: Always consult `/docs` folder before making changes. This contains:
- Project-specific constraints
- Architectural decisions
- Maintenance requirements
- License compliance rules

## KODEGENERERING - MINIMALISTISK TILNÆRMING

### Core Philosophy
**Løs BARE det som eksplisitt blir spurt om**

### Strict Guidelines:
- Ikke legg til "nyttige" tilleggsfunksjoner uten forespørsel
- Hver kodelinje må ha en klar, spesifikk grunn til å eksistere
- Spør deg selv: "Ba brukeren om dette?" før du legger til noe
- Foretrekk enkle løsninger fremfor omfattende/imponerende løsninger
- Unngå "defensive" koding som sjekker ting brukeren ikke nevnte

### UNNGÅ "TRE-EKSEMPEL FELLA":
- Ett eksempel er nok hvis det svarer på spørsmålet
- Ikke lag progresjon (basis→praktisk→avansert) uten forespørsel
- Ikke vis "alternative måter" med mindre eksplisitt spurt
- Spør: "Trenger brukeren å se dette tre ganger?"

## TECHNICAL CONSTRAINTS

### Dependencies & Licensing
- **License Type**: Proprietary - ALL dependencies must be MIT/Apache/BSD compatible
- **Check**: Never add GPL/LGPL libraries
- **Validation**: Refer to `/docs/lisensoverholdelse-kontinuerlige-krav.md`

### File Structure Respect
- `/public_html/` - Web accessible files only
- `/src/` - Business logic
- `/templates/` - Twig templates with metadata
- `/tailwind/` - Custom styles with required documentation
- `/docs/` - Project guidelines (READ FIRST)

### Credentials Management
- Never modify `_credentials.php` (template file)
- Local changes go to `credentials.php` (not in Git)
- Template must always reflect actual structure

## DECISION MAKING PRIORITIES

1. **Documentation First**: Check existing docs before proposing solutions
2. **Minimal Scope**: Solve exactly what's asked, nothing more
3. **Pattern Consistency**: Follow established project patterns
4. **Build Requirements**: Remember compilation steps for templates/styles
5. **License Compliance**: Verify all additions are proprietary-compatible

## ERROR PREVENTION

**Before suggesting ANY change:**
- Is this explicitly requested?
- Does this follow documented patterns?
- Will this require additional build steps?
- Is this the minimal solution?
- Have I checked project constraints in `/docs`?

## META-FILE SYSTEM

When creating or modifying components, maintain the `_meta.json` system for future AI agents. These files should contain:
- Usage patterns
- Technical requirements  
- Integration instructions
- Gotchas and warnings

---

**Remember**: This project has specific architectural decisions made for good reasons. Your job is to work within these constraints, not to redesign them. When in doubt, ask for clarification rather than assuming.