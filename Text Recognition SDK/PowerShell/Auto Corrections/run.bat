@echo off

powershell -NoProfile -ExecutionPolicy Bypass -Command "& .\AutoCorrections.ps1"
echo Script finished with errorlevel=%errorlevel%

pause