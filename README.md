# Laravel Portfolio - Vercel Deployment

This is a Laravel portfolio application configured for deployment on Vercel.

**Author**: Griecelan Millare <griecelanmillare97@gmail.com>

## Local Development

1. Install dependencies:
```bash
composer install
```

2. Set up environment:
```bash
cp .env.example .env
php artisan key:generate
```

3. Create database:
```bash
touch database/database.sqlite
php artisan migrate
```

4. Run development server:
```bash
php artisan serve
```

## Vercel Deployment

### Prerequisites
- Vercel account
- Git repository (GitHub, GitLab, or Bitbucket)

### Deployment Steps

1. **Push to Git Repository**
   - Make sure all changes are committed
   - Push to your preferred Git provider

2. **Import to Vercel**
   - Go to [vercel.com](https://vercel.com)
   - Click "Add New Project"
   - Import your repository

3. **Configure Environment Variables**
   In Vercel project settings, add these environment variables:
   ```
   APP_ENV=production
   APP_DEBUG=false
   APP_KEY=<your-generated-key>
   APP_URL=https://your-project.vercel.app
   DB_CONNECTION=sqlite
   CACHE_DRIVER=file
   SESSION_DRIVER=file
   QUEUE_CONNECTION=sync
   ```

4. **Generate APP_KEY**
   Run this locally to get your key:
   ```bash
   php artisan key:generate --show
   ```
   Copy the output and set it as APP_KEY in Vercel.

5. **Database Setup**
   For SQLite, you'll need to set up a writable storage directory.
   Consider using Vercel's storage or a cloud database service for production.

6. **Deploy**
   - Click "Deploy"
   - Vercel will build and deploy your Laravel app

## Important Notes

- **Storage**: Vercel's serverless functions are stateless. For file uploads and persistent storage, use cloud services like AWS S3, Vercel Blob, or similar.
- **Database**: For production, consider using managed database services like PlanetScale, Supabase, or Vercel Postgres instead of SQLite.
- **Session Storage**: For better performance in production, use Redis or a session-compatible database service.
- **Caching**: Consider using Redis for caching in production.

## Troubleshooting

### 500 Errors
- Check that APP_KEY is set correctly in Vercel environment variables
- Ensure all environment variables are configured
- Check Vercel function logs for specific errors

### Database Issues
- Ensure database file exists in writable location
- Consider using a cloud database service for production

### Static Assets
- Ensure all assets are in the `public` directory
- Check that asset paths use the `asset()` helper function

## File Structure

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
├── tests/                  # Test files
├── vendor/                 # Composer dependencies
├── vercel.json            # Vercel configuration
├── .env.example           # Environment template
├── .gitignore             # Git ignore rules
├── .vercelignore          # Vercel ignore rules
├── artisan                # Laravel CLI
├── composer.json          # PHP dependencies
└── README.md              # This file
```

## Support

For issues specific to this deployment:
- Check Vercel deployment logs
- Review Laravel documentation
- Ensure all environment variables are set correctly