# 🦊 Cypher

![Cypher Banner](https://github.com/lucianoayres/cypher/blob/main/images/banner_cypher.png?raw=true)

## Smart Code Summaries for Token-Efficient LLM Power

[🦾 Overview](#overview) · [🧠 Why Use Cypher](#why-use-cypher) · [✨ Features](#features) · [🚀 How It Works](#how-it-works) · [🧩 Method](#method) · [🛠️ How to Use](#how-to-use) · [Templates 📄](#templates-) · [📄 License](#license) · [🤝 Contribution](#contribution)

---

### 🦾 Overview

Cypher is an AI-powered code summarizer tailored for efficient navigation of large codebases. Using a dedicated [Modelfile](./modelfiles/Cypher1.0), Cypher captures essential code relationships and dependencies, generating optimized, architecture-aware summaries that enable AI to offer insightful support for architectural decisions without analyzing the entire source code.

### 🧠 Why Use Cypher

-   🦊 **Unique Summarization Method**: Uses a specialized approach that organizes summaries by focusing on roles, interfaces, dependencies, and execution flow.
-   💻 **Token-Efficient**: Optimizes prompt size, allowing AI models to handle extensive projects.
-   🧩 **Architectural Insight**: Captures essential code relationships and dependencies, enhancing AI's decision-making.
-   🌐 **Flexible**: Works with projects of any size, from small modules to large enterprise systems.
-   ⏲️ **Time-Saving**: Automates summarization to provide critical context with minimal user input.

### ✨ Features

-   🧬 **Token-Efficient Summarization**: Generates summaries within LLM token limits, retaining essential architectural context.
-   🛠️ **Architecture-Aware Analysis**: Identifies code relationships and dependencies for high-level insights.
-   🔗 **Versatile Usage**: Operates as both a custom Modelfile and a flexible prompt for any LLM.
-   🔎 **Decision Support**: Empowers LLMs to offer informed suggestions without requiring the entire codebase.

---

### 🚀 How It Works

1. **Input Code** 📄: Cypher is provided with the project code, focusing on architecture and structure.
2. **Summarization Process** 🧬: Cypher analyzes code, creating a structured summary of relationships and dependencies.
3. **Model File or Prompt Generation** 🦾: This summary serves as a Modelfile or prompt, delivering a comprehensive project overview.
4. **AI-Enhanced Insights** 🧠✨: With Cypher's summary, AI offers targeted advice without the full code, ideal for architecture decisions.

---

### 🧩 Method

Cypher uses a unique and original **Integrated Summarization Method** that combines multiple summarization techniques to provide a multi-layered, concise overview of complex codebases. This method organizes the summary by focusing on **Roles**, **Interfaces**, **Dependencies**, **Execution Flow**, and **Hierarchy**, creating a comprehensive yet token-efficient representation.

-   🦊 **Role-Based Overview and Dependencies**: Groups code into functional roles, summarizing each file’s purpose and listing primary dependencies.
-   🔍 **Interface Summarization**: Lists key functions, their parameters, return types, and dependencies to show how each function interfaces with others.
-   🔄 **Execution Flow Summary**: Provides a step-by-step breakdown of the application’s execution flow, illustrating module interactions.
-   📊 **Dependency Graph and Hierarchical Structure**: Visualizes file dependencies and organizes the project hierarchy, showing modularity and connections.
-   💡 **Comment Extraction and Key Logic Details**: Highlights important comments, constants, unique logic, and edge-case handling, capturing key design decisions.

This approach integrates multiple summarization techniques for a comprehensive, structured overview of the codebase.

---

### 🛠️ How to Use

Follow these steps to use Cypher for code summarization and architecture insight:

#### 1. Define Your Code Summary Task

Clearly specify the areas of your codebase or architecture requiring a summary. This helps Cypher provide targeted output.

#### Example Task Definition:

"I need an architectural summary of my backend service focusing on dependency relationships and modular design."

#### 2. Clone the Cypher Repository

```bash
git clone https://github.com/lucianoayres/cypher.git
cd cypher
```

#### 3. Prepare the Modelfile with Ollama

Make sure [Ollama](https://github.com/ollama/ollama) is installed.

Create the Cypher model:

```bash
ollama create cypher -f ./modelfiles/Cypher1.0
```

#### 4. Run Cypher

Execute Cypher as a summarizer based on your task:

```bash
ollama run cypher
```

#### 5. Provide the Code Summary Task

Specify the components or architecture you want summarized when prompted by Cypher.

**User Input Example**:

```
Provide a summary of the service architecture, focusing on dependencies among modules and key components.
```

#### 6. Save the Generated Summary

Copy the output and save it to a file, such as `ProjectSummary.txt`. For automated workflows, consider using [Nino](https://github.com/lucianoayres/nino-cli) to save summaries locally.

### 7. Analyze and Refine

Use Cypher’s summary to guide architectural decisions, reorganization, or improvements in the code structure.

---

### Templates 📄

Cypher's primary focus is the [Cypher Modelfile](./modelfiles/Cypher1.0), but prompt examples for usage are available in the [prompts directory](./prompts). These templates offer guidance for crafting tailored summaries and help illustrate Cypher’s flexibility.

**Structure**:

1. **Objective and Rules** 📜: Defines the summary purpose and guidelines to ensure effective analysis.
2. **Command Specification** 🛠️: Core Modelfile commands, such as:
    - **META**: Adds metadata and model info.
    - **FROM**: Specifies the base model (e.g., `llama3.2`).
    - **PARAMETER**: Sets key parameters for summary generation.
    - **MESSAGE**: Provides initial prompts for effective summarization.
    - **LICENSE**: Includes licensing details.
3. **Template** 🧩: The Modelfile template includes placeholders (`<< >>`) for customizing summaries.

---

### 📄 License

Cypher is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

---

### 🤝 Contribution

Your input is welcome! Feel free to open an issue or submit a pull request with suggestions, improvements, or new features. Together, we can enhance Cypher for even smarter code summaries and architectural insight.
