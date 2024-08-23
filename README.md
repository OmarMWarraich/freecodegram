<!-- TABLE OF CONTENTS -->

# 📗 Table of Contents

-   [📖 About the Project](#about-project)
    -   [🛠 Built With](#built-with)
        -   [Tech Stack](#tech-stack)
        -   [Key Features](#key-features)
    -   [🚀 Live Demo](#live-demo)
-   [💻 Getting Started](#getting-started)
    -   [Setup](#setup)
    -   [Prerequisites](#prerequisites)
    -   [Install](#install)
    -   [Usage](#usage)
    -   [Run tests](#run-tests)
    -   [Deployment](#triangular_flag_on_post-deployment)
-   [👥 Authors](#authors)
-   [🔭 Future Features](#future-features)
-   [🤝 Contributing](#contributing)
-   [⭐️ Show your support](#support)
-   [🙏 Acknowledgements](#acknowledgements)
-   [❓ FAQ](#faq)
-   [📝 License](#license)

<!-- PROJECT DESCRIPTION -->

# 📖 [Freecodegram] <a name="about-project"></a>

## Project Description

Freecodegram is an instagram clone built with Laravel and php that allows users to post pictures, follow other users, like and comment on posts.

## 🛠 Built With <a name="built-with"></a>

### Tech Stack <a name="tech-stack"></a>

<details>
  <summary>Client</summary>
  <ul>
    <li><a href="#">Php</a></li>
  </ul>
</details>

<details>
  <summary>Server</summary>
  <ul>
    <li><a href="#">Laravel</a></li>
  </ul>
</details>

<details>
<summary>Database</summary>
  <ul>
    <li><a href="#">MySql</a></li>
  </ul>
</details>

<!-- Features -->

### Key Features <a name="key-features"></a>

-   **Add Profile**
-   **Add Posts**
-   **Follow other Users**
-   **Like on Posts**

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LIVE DEMO -->

## 🚀 Live Demo <a name="live-demo"></a>

Coming Soon

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->

## 💻 Getting Started <a name="getting-started"></a>

To get a local copy up and running, follow these steps.

### Prerequisites

> ## Getting Started
>
> To get a local copy up and running follow these simple example steps.

### Prerequisites

-   Have a computer and internet connection
-   **PHP 8.1:** Check your PHP version with `php -v`
-   **Composer:** Dependency manager for PHP. Verify installation with `composer -v`.
-   **Databasse:** MySQL or any compatible database server
-   Have `visual-studio code` or any other code editor installed on your computer.

### Setup

-   In order to get a copy of this project you need to download it from https://github.com/OmarMWarraich/freecodegram.git
-   Extract the zipped file and open it in your code editor
-   Run the following command in your terminal to get all required files

```sh
git clone https://github.com/OmarMWarraich/freecodegram.git
```

### Install

-   Run the command bellow in your terminal to get all required files

```
composer install
npm install
```

### Set Up Environment Configuration

```sh
cp .env.example .env
```

Open the `.env` file and set the database configuration

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Generate Application Key

```sh
php artisan key:generate
```

### Migrate Database

```sh
php artisan migrate
```

### Seed Database

If your project includes seeders, you can populate the database with simple data:

```sh
php artisan db:seed
```

### Create Symbolink link for storage

```sh
php artisan storage:link
```

### Start the development Server

You can now run the application using the built-in PHP server:

```sh
npm run dev
php artisan serve
```

By default the appication will be available at `http://localhost:8000`

### Run tests

To run all tests in your application, use the following command.

1. Run tests

```sh
./vendor/bin/phpunit
```

Alternatively, if you have PHPUnit installed globally, you can simply run:

```sh
phpunit
```

2. Run Specific Tests

If you want to run a specific test class, you can specify the path to that class:

```sh
./vendor/bin/phpunit tests/Feature/ExampleTest.php
```

Replace `tests/Feature/ExampleTest.php` with the path to the test class you want to run.

3. Run Specific Test Method

To run a specific test method, within a test class, use the `--filter` flag:

```sh
./vendor/bin/phpunit --filter testBasicTest
```

Replace `testBasicTest` with the name of the test method you want to run.

## Author

👤 **Omar Warraich**

-   GitHub: [@Omar Warraich](https://github.com/OmarMWarraich)
-   Twitter: [@omarwarraich1](https://twitter.com/omarwarraich1)
-   LinkedIn: [o-va](https://www.linkedin.com/in/o-va/)

## 🔭 Future Features

-   Display all Profiles
-   Display all Posts
-   Add Comments on Posts
-   Add Likes on Comments
-   Search for Users
-   Search for Posts

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

Feel free to check the [issues page](https://github.com/OmarMWarraich/freecodegram/issues/).

## Show your support

Give a ⭐️ if you like this project!

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ACKNOWLEDGEMENTS -->

## 🙏 Acknowledgments <a name="acknowledgements"></a>

I would like to thank Freecodecamp for their guidance and support throughout the project.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## 📝 License

This project is [MIT](./LICENSE.md) licensed.
