# UNIJUÍ Research Ethics Committee (CEP/UNIJUÍ) Website

This repository contains the official website for the Research Ethics Committee with Human Beings at UNIJUÍ (Comitê de Ética em Pesquisa - CEP/UNIJUÍ).

## About the Project

The Research Ethics Committee at UNIJUÍ is an interdisciplinary and independent collegial body of public relevance, with consultative, deliberative, and educational functions. It was created to defend the interests of research participants in their integrity and dignity and to contribute to the development of research within ethical standards.

The CEP/UNIJUÍ integrates the CEP/CONEP System, which consists of a system integrated by the National Research Ethics Commission (CONEP) of the National Health Council and the Research Ethics Committees.

## Features

- Information about the Ethics Committee's purpose and activities
- Educational resources for researchers
- Documentation and forms for project submission
- Guidelines and regulations
- FAQ section
- Contact information
- Calendar of meetings
- Educational materials (Educa CEPs)

## Technology Stack

- Laravel PHP Framework
- Blade Templating Engine
- HTML/CSS/JavaScript
- Bootstrap (for responsive design)

## Installation

### Prerequisites

- PHP >= 8.0
- Composer
- Node.js and NPM
- MySQL or PostgreSQL database

### Setup Steps

1. Clone the repository:
   ```
   git clone https://github.com/your-organization/comite-de-etica-em-pesquisa-unijui.git
   cd comite-de-etica-em-pesquisa-unijui
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Install JavaScript dependencies:
   ```
   npm install
   ```

4. Copy the environment file and configure it:
   ```
   cp .env.example .env
   ```
   Update the .env file with your database and application settings.

5. Generate application key:
   ```
   php artisan key:generate
   ```

6. Run database migrations:
   ```
   php artisan migrate
   ```

7. Compile assets:
   ```
   npm run dev
   ```
   
8. Start the development server:
   ```
   php artisan serve
   ```

## Project Structure

- `app/` - Contains the core code of the application
- `bootstrap/` - The Laravel bootstrap files
- `config/` - Application configuration files
- `database/` - Database migrations and seeders
- `public/` - Publicly accessible files and entry point
- `resources/` - Views, uncompiled assets (CSS, JS), and language files
- `routes/` - All application routes
- `storage/` - Application storage files
- `tests/` - Automated tests

## Contribution Guidelines

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is proprietary and belongs to UNIJUÍ. Unauthorized copying, redistribution, or use is prohibited.

## Contact

For questions or suggestions regarding the website, please contact the development team at [email protected]

For inquiries about the Research Ethics Committee itself, please use the contact information provided on the website's contact page.

---

© 2025 UNIJUÍ - Universidade Regional do Noroeste do Estado do Rio Grande do Sul. All rights reserved.
