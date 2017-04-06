#!/usr/bin/env bash

wp restore core < core.json
wp db create
wp restore db < db.sql
mkdir -p content/plugins
wp restore plugins < plugins.json
