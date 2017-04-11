# Example WordPress setup

This is an example WordPress setup to show how [this prototype backup/restore WP-CLI command](https://github.com/mbovel/wp-backup-restore-command) could be used. To fix english and code mistakes, please feel free to pull request here. For further ideas and comments, please participe directly to the original discussion: <https://github.com/wp-cli/ideas/issues/5>.

## How to use

### With Docker

1. `git clone https://github.com/mbovel/example-wp-setup`.
2. `cd example-wp-setup`.
3. `docker-compose up`.
4. Wait while the MySQL server starts. When the server is ready, the following line should be printed to `stdout`: `db_1  | Version: '10.1.22-MariaDB-1~jessie'  socket: '/var/run/mysqld/mysqld.sock'  port: 3306  mariadb.org binary distribution`
5. From another shell in the same directory, restore WordPress core files, database and plugins by running `docker-compose run wp bin/restore.sh`.
6. Visit `http://localhost:8080/`

To restore another version, first checkout to the desired version and then run `bin/restore.sh` again:

	git checkout 87b156a6fda3f6a091351dd3bb277036584b6317
	docker-compose run wp bin/restore.sh

### Without Docker

1. `git clone https://github.com/mbovel/example-wp-setup`.
2. `cd example-wp-setup`.
3. Edit `.env` to match local configuration.
4. Run `bin/run.sh`.
5. Restore WordPress core files, database and plugins by running `bin/restore.sh`.
6. Visit the address set as `WP_HOME`.

To restore another version, first checkout to the desired version and then run `bin/restore.sh` again:

	git checkout 87b156a6fda3f6a091351dd3bb277036584b6317
	bin/restore.sh
