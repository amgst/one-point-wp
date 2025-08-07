# Git Integration for WordPress Theme

This WordPress theme is now connected to a Git repository for version control and automated deployment.

## Repository Information
- **Repository URL**: https://github.com/amgst/one-point-wp.git
- **Branch**: main
- **Current Status**: Connected and ready for updates

## Available Update Methods

### 1. Manual Update (Windows Batch Script)
Run the batch file for a simple update process:
```bash
double-click update-theme.bat
```

### 2. Manual Update (PowerShell Script)
For more advanced features and better error handling:
```powershell
# Interactive update with confirmation
.\Update-Theme.ps1

# Force update without confirmation
.\Update-Theme.ps1 -Force
```

### 3. Web-based Deployment
Access the deployment script via web browser:
```
http://your-site.com/wp-content/themes/footer/deploy.php?key=your-secret-key-here
```

### 4. Automated GitHub Actions
The repository includes a GitHub Actions workflow that can automatically deploy changes when code is pushed to the main branch.

## Setup Instructions

### For Web Deployment
1. Edit `deploy.php` and change the `$secret_key` to a secure random string
2. Add your server's IP address to the `$allowed_ips` array
3. Configure your web server to allow PHP execution

### For GitHub Actions
1. In your GitHub repository, go to Settings > Secrets and Variables > Actions
2. Add a secret named `DEPLOY_SECRET` with your deployment key
3. Edit `.github/workflows/deploy.yml` and update the site URL and secret key

### For Webhook Integration
If you want GitHub to automatically trigger deployments:
1. Go to your GitHub repository settings
2. Navigate to Webhooks
3. Add a new webhook with:
   - **Payload URL**: `https://your-site.com/wp-content/themes/footer/deploy.php?key=your-secret-key`
   - **Content type**: `application/json`
   - **Events**: Just the push event

## Security Considerations

⚠️ **Important Security Notes**:
- Always change the default secret key in `deploy.php`
- Restrict access to deployment scripts by IP address
- Use HTTPS for webhook URLs
- Regularly monitor the `deployment.log` file
- Consider using environment variables for sensitive data

## File Structure

```
theme-folder/
├── deploy.php              # Web-based deployment script
├── update-theme.bat         # Windows batch update script
├── Update-Theme.ps1         # PowerShell update script
├── .github/
│   └── workflows/
│       └── deploy.yml       # GitHub Actions workflow
├── deployment.log           # Deployment log file (created automatically)
└── README-Git-Integration.md # This file
```

## Troubleshooting

### Common Issues

1. **Git not found**
   - Ensure Git is installed and added to your system PATH
   - Restart your terminal/command prompt after installing Git

2. **Permission denied**
   - Check file permissions on the theme directory
   - Ensure the web server has write access to the theme folder

3. **Deployment fails**
   - Check the `deployment.log` file for error details
   - Verify the secret key is correct
   - Ensure the repository URL is accessible

4. **Local changes overwritten**
   - The update process will overwrite local changes
   - Always commit important changes to the repository first
   - Use `git stash` to temporarily save local changes

### Manual Git Commands

If you prefer using Git directly:

```bash
# Check current status
git status

# Fetch latest changes
git fetch origin

# View available updates
git log HEAD..origin/main --oneline

# Update to latest version (overwrites local changes)
git reset --hard origin/main

# View commit history
git log --oneline -10
```

## Best Practices

1. **Always test updates** on a staging environment first
2. **Backup your site** before major updates
3. **Monitor deployment logs** regularly
4. **Use descriptive commit messages** in the repository
5. **Tag releases** for important versions
6. **Document changes** in commit messages

## Support

If you encounter issues with the Git integration:
1. Check the deployment logs
2. Verify your Git configuration
3. Test manual Git commands
4. Contact your developer or system administrator

---

**Last Updated**: $(Get-Date -Format 'yyyy-MM-dd')
**Version**: 1.0