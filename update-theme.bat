@echo off
echo Starting theme update from Git repository...
echo.

:: Change to theme directory
cd /d "%~dp0"

:: Check if git is available
git --version >nul 2>&1
if errorlevel 1 (
    echo Error: Git is not installed or not in PATH
    pause
    exit /b 1
)

:: Fetch latest changes
echo Fetching latest changes from repository...
git fetch origin
if errorlevel 1 (
    echo Error: Failed to fetch from repository
    pause
    exit /b 1
)

:: Show current status
echo.
echo Current status:
git status --short

:: Ask for confirmation before updating
echo.
set /p confirm="Do you want to update the theme files? This will overwrite local changes. (y/N): "
if /i not "%confirm%"=="y" (
    echo Update cancelled.
    pause
    exit /b 0
)

:: Reset to latest commit
echo.
echo Updating theme files...
git reset --hard origin/main
if errorlevel 1 (
    echo Error: Failed to update files
    pause
    exit /b 1
)

echo.
echo ✅ Theme updated successfully!
echo Current commit:
git log -1 --oneline

echo.
echo Update completed. Press any key to exit.
pause >nul