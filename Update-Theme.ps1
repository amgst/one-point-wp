<#
.SYNOPSIS
    Updates the WordPress theme from Git repository

.DESCRIPTION
    This script pulls the latest changes from the Git repository and updates the theme files.
    It includes safety checks and confirmation prompts.

.PARAMETER Force
    Skip confirmation prompt and update immediately

.EXAMPLE
    .\Update-Theme.ps1
    
.EXAMPLE
    .\Update-Theme.ps1 -Force
#>

param(
    [switch]$Force
)

# Set error action preference
$ErrorActionPreference = "Stop"

# Change to script directory
Set-Location $PSScriptRoot

Write-Host "Starting theme update from Git repository..." -ForegroundColor Cyan
Write-Host ""

try {
    # Check if git is available
    $null = Get-Command git -ErrorAction Stop
    Write-Host "Git is available" -ForegroundColor Green
}
catch {
    Write-Host "Error: Git is not installed or not in PATH" -ForegroundColor Red
    exit 1
}

try {
    # Fetch latest changes
    Write-Host "Fetching latest changes from repository..." -ForegroundColor Yellow
    git fetch origin
    
    # Show current status
    Write-Host ""
    Write-Host "Current status:" -ForegroundColor Cyan
    $status = git status --porcelain
    if ($status) {
        Write-Host $status -ForegroundColor Yellow
        Write-Host "Warning: You have local changes that will be overwritten!" -ForegroundColor Red
    } else {
        Write-Host "Working directory is clean" -ForegroundColor Green
    }
    
    # Show what will be updated
    Write-Host ""
    Write-Host "Changes to be applied:" -ForegroundColor Cyan
    $changes = git log HEAD..origin/main --oneline
    if ($changes) {
        Write-Host $changes -ForegroundColor White
    } else {
        Write-Host "No new changes available" -ForegroundColor Green
        Write-Host "Theme is already up to date!" -ForegroundColor Green
        exit 0
    }
    
    # Ask for confirmation unless -Force is used
    if (-not $Force) {
        Write-Host ""
        $confirm = Read-Host "Do you want to update the theme files? This will overwrite local changes. (y/N)"
        if ($confirm -ne 'y' -and $confirm -ne 'Y') {
            Write-Host "Update cancelled." -ForegroundColor Yellow
            exit 0
        }
    }
    
    # Reset to latest commit
    Write-Host ""
    Write-Host "Updating theme files..." -ForegroundColor Yellow
    git reset --hard origin/main
    
    Write-Host ""
    Write-Host "Theme updated successfully!" -ForegroundColor Green
    Write-Host "Current commit:" -ForegroundColor Cyan
    git log -1 --oneline
    
    Write-Host ""
    Write-Host "Update completed successfully!" -ForegroundColor Green
    
}
catch {
    Write-Host ""
    Write-Host "Error: $($_.Exception.Message)" -ForegroundColor Red
    exit 1
}

Write-Host ""
Write-Host "Press any key to exit..." -ForegroundColor Gray
$null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown")