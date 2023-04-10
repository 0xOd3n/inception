<h1>Inception</h1>

This project is about using `Docker` and `Docker compose` to create a small multi-containers application with a **wordpress** website, running with **php-fmp**, **nginx** and **mariadb**.


<!-- 
We need to build the following architecture with a certain set of constraints :

![project architecture](img/architecture.png)
-->

#### Tasks:
- A Docker container that contains `NGINX` with TLSv1.2 or TLSv1.3 only.
- A Docker container that contains `WordPress` + php-fpm (it must be installed and configured) only without nginx.
- A Docker container that contains `MariaDB` only without nginx.
- A `volume` that contains WordPress database.
- A second `volume` that contains WordPress website files.
- A docker-network that establishes the connection between containers.
- The containers must restart in case of a crash.
- In  WordPress database, there must be two users, one of them being the administrator. The administrator’s username can’t contain admin/Admin or administrator/Administrator (e.g., admin, administrator, Administrator, admin-123, and so forth).
- The`volumes` will be available in the `/home/login/data` folder of the host machine using Docker. Of course, you have to replace the login with yours.
- To make things simpler, you have to configure your domain name so it points to your local IP address. This domain name must be `login.42.fr`. Again, you have to use your own `login`. For example, if your `login` is `wil`, `wil.42.fr` will redirect to the IP address pointing to wil’s website.
- It is mandatory to use environment variables. Also, it is strongly recommended to use a `.env` file to store environment variables. The .env file should be located at the root of the `srcs` directory.

