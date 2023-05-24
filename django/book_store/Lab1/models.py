from django.db import models

# Create your models here.
# Create your models here.
class Book(models.Model):
    # slug = models.SlugField()
    name = models.CharField("Book Name", max_length=255, unique=True)
    description = models.TextField("Book Description")
    pages = models.IntegerField(default=0)
    rate = models.PositiveIntegerField(default=0) 
    prod_date = models.DateField(null=True)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    
    def __str__(self):
        return f"Title {self.name}"