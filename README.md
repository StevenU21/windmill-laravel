# Windmill-Laravel

¡Bienvenido a **Windmill-Laravel**! Este proyecto es una integración de Laravel 12 con el paquete **Windmill-Dashboard**, diseñado para ofrecer una experiencia de usuario moderna y accesible, junto con un diseño elegante y funcional.

## 🚀 Características

- 🌙 **Tema Oscuro Habilitado**  
  Soporte completo para tema oscuro, incluyendo la carga de imágenes específicas según el tema.

- 🧑‍🦯 **Totalmente Accesible**  
  Diseñado para ser utilizado con lectores de pantalla, asegurando una experiencia inclusiva para todos los usuarios.

- 🛠️ **Componentes Personalizados**  
  Componentes reutilizables y fáciles de mantener.

- ⚡ **Tecnologías Integradas**:
  - **Alpine JS**: Utilizado para menús desplegables y conmutadores interactivos.
  - **Tailwind CSS**: Framework CSS moderno para un diseño elegante y receptivo.
  - **Chart.js**: Gráficos interactivos y personalizables.
  - **Heroicons**: Íconos hermosos y listos para usar.

## 🏗️ Instalación

Sigue estos pasos para instalar y configurar el proyecto:

1. Clona el repositorio:
   ```bash
   git clone https://github.com/StevenU21/windmill-laravel.git
   cd windmill-laravel
   ```

2. Instala las dependencias de Laravel:
   ```bash
   composer install
   ```

3. Instala las dependencias de frontend:
   ```bash
   npm install && npm run dev
   ```

4. Configura el archivo `.env`:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Configura tu base de datos en el archivo `.env` y ejecuta las migraciones:
   ```bash
   php artisan migrate
   ```

6. Inicia el servidor de desarrollo:
   ```bash
   php artisan serve
   ```

¡Eso es todo! Ahora puedes acceder a tu aplicación en `http://localhost:8000`.

## 📊 Screenshots



## 🛠️ Contribuciones

¡Las contribuciones son bienvenidas!

## 📝 Licencia

Este proyecto está bajo la licencia [MIT](LICENSE).
