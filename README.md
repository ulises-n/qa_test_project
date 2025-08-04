# 📋 QA Test Project – Sistema de Registro y Login (PHP 8 + MySQL)

Este proyecto simula un entorno real de pruebas QA para un sistema web de registro e inicio de sesión desarrollado en PHP y MySQL.  
Contiene código funcional, casos de prueba, reporte de bugs y evidencias documentadas como parte del proceso completo de aseguramiento de calidad.

---

## ⚙️ Tecnologías utilizadas

- PHP 8.x
- MySQL
- XAMPP
- HTML
- SQL
- Excel (para documentación de pruebas)
- Git (control de versiones)
- GitHub (repositorio remoto)

---

## 🧪 Alcance de pruebas realizadas

Se diseñaron y ejecutaron **5 casos de prueba** fundamentales:

| Código | Descripción                                   |
|--------|-----------------------------------------------|
| TC-01  | Registro exitoso                              |
| TC-02  | Registro con email duplicado                  |
| TC-03  | Login exitoso                                 |
| TC-04  | Login con contraseña incorrecta               |
| TC-05  | Login con usuario no registrado               |

---

## 🐞 Reporte de Bugs

Se documentó al menos **1 bug funcional**, incluyendo:

- Descripción del error
- Pasos para reproducirlo
- Severidad
- Captura de pantalla

---

## 📂 Estructura del repositorio

QA_TEST_PROJECT/
├── evidencias/
│ ├── captura_bug01_error_email_duplicado.png
│ ├── captura_tc01_registro_exitoso.png
│ ├── captura_tc02_email_duplicado.png
│ ├── captura_tc03_login_exitoso.png
│ ├── captura_tc04_login_contraseña_incorrecta.png
│ ├── captura_tc05_login_usuario_inexistente.png
│ ├── sql_tc01_validacion_registro.sql
│ ├── sql_tc02_validacion_email_duplicado.sql
│ ├── sql_tc03_validacion_login.sql
│ ├── sql_tc04_validacion_contraseña_incorrecta.sql
│ └── sql_tc05_validacion_usuario_no_registrado.sql
├── src_code/
│ ├── assets/
│ │ └── style.css
│ ├── connection.php
│ ├── index.php
│ ├── login.php
│ └── register.php
├── test_docs/
│ └── QA_Proyecto_LoginRegistro_TestCases_Bugs.xlsx
└── README.md
---

## 📌 ¿Qué aprendí haciendo este proyecto?

- Aplicar pruebas funcionales y exploratorias en un entorno real  
- Documentar profesionalmente resultados de QA  
- Validar datos con SQL directamente en la base de datos  
- Simular el ciclo completo de aseguramiento de calidad de software

---