#!/usr/bin/env bash

wp backup core > core.json
wp backup plugins > plugins.json
wp backup db > db.sql
