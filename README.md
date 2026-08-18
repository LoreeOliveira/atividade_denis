# 🐘 Lista 1 - Conceitos Básicos de PHP | Programação Back-end

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![SENAI](https://img.shields.io/badge/SENAI-A._Jacob_Lafer-red?style=for-the-badge)
![Curso](https://img.shields.io/badge/Curso-Técnico_em_Desenvolvimento_de_Sistemas-blue?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Concluído-success?style=for-the-badge)

Este repositório contém a resolução da **Lista 1 de Atividades de Programação Back-end**, desenvolvida durante o curso Técnico em Desenvolvimento de Sistemas na **Escola SENAI "A. Jacob Lafer"**.

O objetivo desta lista é consolidar os fundamentos da linguagem **PHP**, abordando desde operações aritméticas simples até a criação de funções estruturadas e manipulação de vetores.

---

## 📌 Sumário
- [Informações Acadêmicas](#-informações-acadêmicas)
- [Conceitos Utilizados](#-conceitos-utilizados)
- [Descrição dos Exercícios](#-descrição-dos-exercícios)
- [Estrutura do Repositório](#-estrutura-do-repositório)
- [Como Executar os Exercícios](#-como-executar-os-exercícios)
- [Configuração de Formatação no VS Code](#-configuração-de-formatação-no-vs-code)
- [Autor e Créditos](#-autor-e-créditos)

---

## 🎓 Informações Acadêmicas

* **Instituição:** Escola SENAI "A. Jacob Lafer" (UFP - 1.18)
* **Curso:** Técnico em Desenvolvimento de Sistemas
* **Componente Curricular:** Programação Back-end
* **Professores:** Ignacio / Denis
* **Atividade:** Atividades - Lista 1 (Conceitos Básicos PHP)

---

## 🧠 Conceitos Utilizados

Nesta lista de exercícios foram aplicados diversos conceitos essenciais do desenvolvimento Back-end com PHP:

1. **Sintaxe Básica e Variáveis (`$`)**
   - Declaração de variáveis com nomes semânticos.
   - Manipulação de tipos primitivos (Float, Integer, String, Array e Boolean).

2. **Operadores Aritméticos**
   - Multiplicação (`*`), Divisão (`/`), Adição (`+`), Subtração (`-`) e Exponenciação (`**`).
   - Cálculo de porcentagem e descontos.

3. **Estruturas Condicionais (`if`, `else`, `elseif`)**
   - Tomada de decisão baseada em condições simples e compostas.
   - Aplicação de regras de negócio (descontos, aprovação e faixas de IMC).

4. **Operadores Lógicos e de Comparação**
   - Operador lógico `&&` (AND) para verificação simultânea de múltiplas condições.
   - Operadores relacionais: `>=`, `<=`, `>`, `<`.

5. **Estruturas de Repetição (Laços / Loops)**
   - **Laço `for`:** Repetição contínua com contador para geração da tabuada.
   - **Laço `foreach`:** Iteração sobre elementos de um vetor (array).

6. **Vetores e Manipulação de Arrays**
   - Armazenamento e organização de conjuntos de dados (notas de alunos).
   - Processamento de dados contidos no vetor (soma total, média, maior e menor valor).

7. **Funções e Modularização**
   - Declaração de função personalizada (`calcularIMC($peso, $altura)`).
   - Passagem de parâmetros e retorno de valores (`return`).
   - Reutilização de código e separação da lógica de cálculo da exibição.

8. **Boas Práticas de Código**
   - Indentação adequada do código.
   - Uso da extensão **PHP Intelephense** para formatação automática.

---

## 📝 Descrição dos Exercícios

### 🟢 Exercício 1: Cálculo de Compra com Desconto
* **Objetivo:** Ler o preço de um produto e a quantidade comprada, calculando o valor total.
* **Regra:** Se o valor total for maior ou igual a **R$ 200,00**, aplica-se um desconto de **10%**.
* **Conceitos:** Variáveis, Operadores Aritméticos e Condicional `if/else`.

---

### 🟢 Exercício 2: Validação de Aprovação de Aluno
* **Objetivo:** Verificar a situação final do aluno com base na média final e quantidade de faltas.
* **Regra:** Aprovação requer **média >= 6.0** **E** **faltas <= 15**.
* **Conceitos:** Operador lógico `&&` (AND), Condicionais.

---

### 🟢 Exercício 3: Tabuada Dinâmica
* **Objetivo:** Exibir a tabuada de 1 a 10 para um número definido em uma variável.
* **Saída esperada:** Exibição do número, multiplicador e resultado (ex: `"5 x 3 = 15"`).
* **Conceitos:** Laço de repetição `for`, interpolação/concatenação de strings.

---

### 🟢 Exercício 4: Processamento de Notas com Array
* **Objetivo:** Armazenar as notas de 5 alunos em um vetor, percorrer o vetor com `foreach`, calcular a média da turma e identificar a maior e menor nota.
* **Conceitos:** Vetores (Arrays), Laço `foreach`, Acumuladores e Funções de ordenação/comparação.

---

### 🟢 Exercício 5: Calculadora e Classificação de IMC
* **Objetivo:** Criar uma função `calcularIMC($peso, $altura)` que retorna o IMC calculado ($peso \div altura^2$). No código principal, classificar o resultado em: *Abaixo do peso*, *Peso normal*, *Sobrepeso* ou *Obesidade*.
* **Conceitos:** Funções com parâmetros e retorno (`return`), Escopo de variáveis, Estrutura condicional encadeada (`if / elseif / else`).

---

## 📁 Estrutura do Repositório

```text
.
├── exercicio1.php    # Cálculo de compra com desconto
├── exercicio2.php    # Verificação de aprovação do aluno
├── exercicio3.php    # Tabuada com laço for
├── exercicio4.php    # Média, maior e menor nota em array
├── exercicio5.php    # Função de cálculo de IMC e classificação
└── README.md         # Documentação do projeto
