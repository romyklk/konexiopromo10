<?php

echo "<h1>Classe et interface existantes</h1>";

echo "<h2>Classes existantes</h2>";
echo "<pre>";
print_r(get_declared_classes());
echo "</pre>";

echo "<h2>Interfaces existantes</h2>";

echo "<pre>";
print_r(get_declared_interfaces());
echo "</pre>";