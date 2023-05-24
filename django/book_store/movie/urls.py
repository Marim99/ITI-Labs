from django.urls import path
from .views import movie_index, movie_deatil, movie_create, movie_update, movie_delete

app_name = 'movie'

urlpatterns = [
    path('', movie_index, name="movie-index"),
    path('<int:pk>/detail', movie_deatil, name="movie-detail"),
    path('create', movie_create, name="movie-create"),
    path('<int:pk>/update', movie_update, name="movie-update"),
    path('<int:pk>/delete', movie_delete, name="movie-delete"),
]