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

Cypher smartly summarizes your code, providing a concise output for further use with any LLM of your choice.

#### 1. Select Your Source Code

Choose the code or snippet you’d like summarized. Cypher will analyze it and generate an efficient overview.

#### 2. Clone the Cypher Repository

Clone the Cypher repository:

```bash
git clone https://github.com/lucianoayres/cypher.git
cd cypher
```

#### 3. Set Up the Cypher Modelfile

Ensure [Ollama](https://github.com/ollama/ollama) is installed, then create the Cypher model:

```bash
ollama create cypher -f ./modelfiles/Cypher1.0
```

#### 4. Run Cypher

Execute Cypher to generate a summary of your code:

```bash
ollama run cypher
```

#### 5. Input Your Code

Provide the source code when prompted. Cypher will process the code and output a smart summary, completing its task.

#### 6. Save the Summary (Optional)

To save the Cypher output automatically, use [Nino](https://github.com/lucianoayres/nino-cli). This allows you to save the summary locally for easy reference.

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
