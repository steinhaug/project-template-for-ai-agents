# AI Agent - System Directives

## 1.0 MAIN AI DIRECTIVES

### Project Architecture Overview

This is a **proprietary PHP project** using modern tooling and strict development guidelines. Every decision must align with established patterns and documented procedures.

### 1.1 STYLING SYSTEM - TAILWIND + CUSTOM SCSS

**Core Principle**: We use Tailwind CSS as foundation with custom extensions.

### Adding Custom Styles - SIMPLIFIED PROCESS:
1. Create `.scss` file in `/tailwind/custom-styles/` with descriptive name
2. Start file with detailed comment block explaining:
   - Purpose and rationale
   - Where it's used in the app
   - Why this approach was chosen
3. Write CSS code - no limitations on complexity
4. Run `npm run build` to compile and update dist files

**Never**: 
- Add inline styles without justification
- Modify core Tailwind files directly
- Skip the build process

### 1.2 TEMPLATE SYSTEM - TWIG TEMPLATES

**Template Location**: `/templates/twig/` directory

**Documentation System**:
- Each directory contains a `.meta.json` file that documents ALL templates in that folder
- Meta files contain usage instructions, required/optional parameters, and code examples
- For AI guidance, refer to: `/docs-ai/how-to-render-twig-templates.md`

**Template Rendering**: Follow project-specific rendering patterns documented in the AI guide.

**Meta File Structure**: Each `.meta.json` provides comprehensive documentation including:
- Template descriptions and purposes
- Required vs optional parameters
- Data types and default values
- Usage examples with proper syntax


## 2.0 FILES AND FOLDERS - GENERAL GUIDELINES

### 2.1 Files/Folders - Normal Operations Exclusions

**Never analyze or modify unless explicitly requested:**
- `/docs/**/*` - Human documentation
- `/logs/**/*` - Webserver logs  
- `/node_modules/**/*` - Dependencies
- `/vendor/**/*` - Composer dependencies
- `/templates/cache/**/*` - Twig cache
- `/public_html/playground/**/*` - Testing area, outside main app

**Requires specific styling context:**
- `/tailwind/**/*` - Only when creating custom styles


## 3.0 DOCUMENTATION & AI CONTEXT

### 3.1 Documentation and prompt templates

**/docs** - Documentation for humans  

The guidelines and todos' for the project are all in this folder, it is important to have read all theese files. Contents should be known by all partisitpants of the project.

**/docs-ai** - Documentation for AI  

This folder have files written for AI consumption, so token optimization and compressed language are ways to write files here.
Project files will usually reference something and point to the file in this folder.

Best case scenario is that all the guidelines and conciderations from the /docs folder are automated in this folder.

**/ai-prompts** - Prompt templates  

Folder for storing prompt templates for different scenarios. In any case where a prompt template is required for a use case, the logic will have to point to a particular file in this folder. THe foler is not intended for the AI-agents to "index".

### 3.2 AI Context and dott files.

Any AI-agent shoud be aware of the contextual files especially tailored for AI consumption. Theese files are optional but possible to have in any folder.

`.meta.json`
Indexed meta-information covering the files in the directory. Basically when this file is present the AI-agent can use this file instead of having to parse all the files.
The knowledge given by this file should be the knowledge the AI-agent needs to make use of the files in the folder.

`.instructions.md`
When present it has contextual instructions for files or parts of the files. Theese files are not a replaceement for parsing the files, but rather a way to give the AI-agent instructions on how to use the files in the folder.

### 3.3 Logging files used for verbosing AI Agent actions 

`.audit.log` - Human readable history of changes made by AI agents  
Each time an AI-agent does modifications to files it should apppend a log entry to this file. This is to ensure transparency and traceability of changes made by AI agents.

For each change done in a directory, AI-Agents should always prepend a log entry in the form of a new line using the following syntax:

- Format: `YYYY-MM-DD HH:MM - Brief description of change`
- Keep entries concise but informative

## 4.0 KODEGENERERING - MINIMALISTISK TILNÆRMING

### Core Philosophy
**Løs BARE det som eksplisitt blir spurt om**

### 4.1 Strict Guidelines:
- Ikke legg til "nyttige" tilleggsfunksjoner uten forespørsel
- Hver kodelinje må ha en klar, spesifikk grunn til å eksistere
- Spør deg selv: "Ba brukeren om dette?" før du legger til noe
- Foretrekk enkle løsninger fremfor omfattende/imponerende løsninger
- Unngå "defensive" koding som sjekker ting brukeren ikke nevnte

### 4.2 UNNGÅ "TRE-EKSEMPEL FELLA":
- Ett eksempel er nok hvis det svarer på spørsmålet
- Ikke lag progresjon (basis→praktisk→avansert) uten forespørsel
- Ikke vis "alternative måter" med mindre eksplisitt spurt
- Spør: "Trenger brukeren å se dette tre ganger?"

## 5.0 TECHNICAL CONSTRAINTS

### 5.1 Dependencies & Licensing
- **License Type**: Proprietary - ALL dependencies must be MIT/Apache/BSD compatible
- **Check**: Never add GPL/LGPL libraries
- **Validation**: Refer to `/docs/lisensoverholdelse-kontinuerlige-krav.md`

### 5.2 File Structure Respect
- `/public_html/` - Web accessible files only
- `/src/` - Business logic
- `/templates/` - Twig templates with metadata
- `/tailwind/` - Custom styles with required documentation
- `/docs/` - Project guidelines (READ FIRST)

### 5.3 Credentials Management
- Never modify `_credentials.php` (template file)
- Local changes go to `credentials.php` (not in Git)
- Template must always reflect actual structure

## 6.0 DECISION MAKING PRIORITIES

1. **Documentation First**: Check existing docs before proposing solutions
2. **Minimal Scope**: Solve exactly what's asked, nothing more
3. **Pattern Consistency**: Follow established project patterns
4. **Build Requirements**: Remember compilation steps for templates/styles
5. **License Compliance**: Verify all additions are proprietary-compatible

## 7.0 ERROR PREVENTION

**Before suggesting ANY change:**
- Is this explicitly requested?
- Does this follow documented patterns?
- Will this require additional build steps?
- Is this the minimal solution?
- Have I checked project constraints in `/docs`?

## 8.0 META-FILE SYSTEM

Special considerations should be taken when doing work with source files in the following folders:

/tailwind/
/templates/

Both directories have special maintenance logic when changes are done. Check the `.instructions.md` in each folder for specific instructions.

---

**Remember**: This project has specific architectural decisions made for good reasons. Your job is to work within these constraints, not to redesign them. When in doubt, ask for clarification rather than assuming.