# TaskTrail 🚀

Streamline your projects, simplify your tasks.

TaskTrail is a robust, feature-packed project management tool designed to help teams collaborate, stay organized, and achieve their goals efficiently. Whether you’re managing a small project or a large team, TaskTrail provides the tools you need to succeed.

---

## Features ✨

- **User Management**  
  Create, assign, and manage users with role-based permissions.  
  - Admins can oversee all projects and tasks, while users focus on their assigned work.

- **Project Management**  
  Create, update, and delete projects effortlessly.  
  - View all project details in one place.

- **Task Management**  
  Assign tasks to team members and set priorities.  
  - Change task statuses (Pending, In Progress, Completed) with ease.  
  - Add comments and notes for better collaboration.

- **Dashboards**  
  - **Admin Dashboard**: Gain insights into all tasks and projects.  
  - **User Dashboard**: View and track assigned tasks with status updates.

- **Notifications**  
  - Get instant updates on task assignments and status changes.  
  - Stay informed when tasks are completed.

- **Responsive Design**  
  Built with Tailwind CSS for a sleek and responsive interface, ensuring a seamless experience on any device.

---

## Getting Started 🚀

### Prerequisites

Ensure you have the following installed:
- PHP 8.3+
- Composer
- Node.js & NPM
- MySQL

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/shashikanuwan/task-trail.git
    ```
    ```bash
    cd task-trail
    ```

2. Install dependencies:

    ```bash
    composer install
    npm install
    npm run build
    ```

3. Set up your `.env` file:

    ```bash
    cp .env.example .env
    ```

    Update the database credentials and other configuration values.

4. Generate the application key:

    ```bash
    php artisan key:generate
    ```

5. Run migrations and seeders:

    ```bash
    php artisan migrate --seed
    ```

6. Start the local development server:

    ```bash
    composer run dev
    ```

    Visit `http://127.0.0.1:8000` to start using TaskTrail.

---

## Roles & Permissions 🔐

TaskTrail comes with role-based access control for:
- **Admin**: Manage projects, tasks, users, and view all dashboards.
- **User**: View and manage assigned tasks.

---

## Built With 🛠️

- **Laravel** – Full stack framework.
- **Tailwind CSS** – Responsive and modern UI design.

---

## Contributing 🤝

We welcome contributions to TaskTrail! To contribute:

1. Fork the repository.  
2. Create a feature branch:

    ```bash
    git checkout -b feature/your-feature-name
    ```

3. Commit your changes:

    ```bash
    git commit -m "Add your feature description"
    ```

4. Push to your branch:

    ```bash
    git push origin feature/your-feature-name
    ```

5. Open a pull request.

---

## License 📜

This project is licensed under the MIT License.

---

## Screenshots 📸

Coming soon!

---

## Contact 📬

Have questions or feedback? Reach out:
- Email: contact@shashikanuwan.me
- GitHub Issues: Create an Issue

Let’s build better projects together with TaskTrail! 💼✨
