from django.db import models

# Create your models here.
class Movie(models.Model):
    # slug = models.SlugField()
    name = models.CharField("Movie Name", max_length=255, unique=True)
    description = models.TextField("Movie Description")
    likes = models.IntegerField(default=0)
    watch_count = models.IntegerField(default=0)
    rate = models.PositiveIntegerField(default=0) 
    prod_date = models.DateField(null=True)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    
    def __str__(self):
        return f"Title {self.name}"
    # class Meta:
    #     ordering = ['created_at']
    #     verbose_name = "Movie Model"
    #     verbose_name_plural = "Movies"
    #     db_name = "movies"