# Private deployment configuration

Create .env from .env.example locally and set fresh credentials. The previously tracked .env contained a database password and must be purged from history. Rotate that database credential and any reused password through the database administrator. Generate a fresh Laravel application key for new installations. Coordinate APP_KEY rotation with existing encrypted data before changing a running deployment. No running service was modified by this cleanup.
