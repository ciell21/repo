# Vercel Deployment Guide for Laravel Portfolio

## Quick Start

### 1. Prepare Your Project

Ensure your project is committed to Git:

```bash
git add .
git commit -m "Prepare for Vercel deployment"
git push origin main
```

### 2. Deploy to Vercel

**Option A: Via Vercel Dashboard**
1. Go to [vercel.com](https://vercel.com) and log in
2. Click "Add New Project"
3. Import your Git repository
4. Configure project settings (see below)
5. Click "Deploy"

**Option B: Via Vercel CLI**
```bash
npm install -g vercel
vercel login
vercel
```

### 3. Configure Environment Variables

In your Vercel project settings, add these environment variables:

```
APP_ENV=production
APP_DEBUG=false
APP_KEY=<your-app-key>
APP_URL=https://your-project.vercel.app
DB_CONNECTION=sqlite
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

**Important**: Generate your APP_KEY locally:
```bash
php artisan key:generate --show
```
Copy the output and use it as the APP_KEY value.

### 4. Post-Deployment Setup

After deployment, you may need to:

1. **Set up database**: For SQLite, ensure the database file is writable. For production, consider using a cloud database service.

2. **Run migrations**: You may need to run migrations on your deployed database:
   ```bash
   vercel env pull .env.local
   php artisan migrate --force
   ```

3. **Clear cache**: If you encounter caching issues:
   ```bash
   php artisan cache:clear
   php artisan config:clear
   php artisan route:clear
   php artisan view:clear
   ```

## File Structure for Vercel

Your project structure is now optimized for Vercel:

```
portfolio/
├── app/                    # Application code
├── bootstrap/              # Bootstrap files
├── config/                 # Configuration files
├── database/               # Database files
├── public/                 # Public web root
│   ├── index.php          # Entry point
│   ├── images/            # Static images
│   └── ...
├── resources/              # Views and raw assets
├── routes/                 # Route definitions
├── storage/                # Storage files
│   ├── framework/         # Framework cache
│   ├── logs/              # Log files
│   └── app/               # Application storage
├── tests/                  # Test files
├── vendor/                 # Composer dependencies
├── vercel.json            # Vercel configuration
├── .env.example           # Environment template
├── .gitignore             # Git ignore rules
├── .vercelignore          # Vercel ignore rules
├── package.json           # Build scripts
├── artisan                # Laravel CLI
├── composer.json          # PHP dependencies
├── DEPLOYMENT.md          # This file
└── README.md              # General documentation
```

## Configuration Files

### vercel.json
Configures how Vercel builds and serves your Laravel application.

### .vercelignore
Specifies files and directories to exclude from Vercel deployment.

### .env.example
Template for environment variables.

### package.json
Build scripts for Vercel deployment.

## Production Considerations

### Database
- **Development**: SQLite (current setup)
- **Production**: Consider using PlanetScale, Supabase, or Vercel Postgres

### Storage
- Vercel functions are stateless
- Use cloud storage (AWS S3, Vercel Blob) for file uploads
- Keep cache files minimal

### Session Storage
- Current: File-based
- Production: Consider Redis or database-backed sessions

### Caching
- Current: File-based
- Production: Consider Redis for better performance

## Troubleshooting

### 500 Internal Server Error
- Check APP_KEY is set correctly
- Verify all environment variables are configured
- Check Vercel function logs

### Database Connection Issues
- Ensure database credentials are correct
- Check if database service is accessible
- Verify DB_CONNECTION setting

### Asset Loading Issues
- Ensure assets are in the `public` directory
- Use `asset()` helper for asset paths
- Check file permissions

### Cache Issues
- Clear all caches: `php artisan cache:clear`
- Clear config cache: `php artisan config:clear`
- Clear route cache: `php artisan route:clear`
- Clear view cache: `php artisan view:clear`

## Domain Configuration

After deployment, you can:

1. **Custom Domain**: Add a custom domain in Vercel settings
2. **SSL**: Vercel provides automatic SSL certificates
3. **Redirects**: Configure redirects in vercel.json if needed

## Monitoring

- Vercel provides built-in analytics
- Check deployment logs in Vercel dashboard
- Monitor error rates and performance

## Scaling

- Vercel automatically scales based on traffic
- Serverless functions handle concurrent requests
- Consider database connection pooling for high traffic

## Support

For issues:
- Check Vercel deployment logs
- Review Laravel documentation
- Ensure all environment variables are set
- Verify file permissions and directory structure