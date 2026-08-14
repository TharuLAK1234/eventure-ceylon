@echo off
title EVENTURE CEYLON - Development Server

echo.
echo ============================================
echo   EVENTURE CEYLON - Development Server
echo ============================================
echo.

REM Navigate to public directory
cd /d "%~dp0public"

echo Starting PHP Development Server...
echo URL: http://localhost:8000
echo.
echo Press Ctrl+C to stop the server
echo.

REM Start PHP server on port 8000
C:\xampp\php\php.exe -S localhost:8000

pause
