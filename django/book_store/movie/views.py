from django.shortcuts import render, redirect
from .models import Movie
from django.views.decorators.csrf import csrf_exempt
from .forms import MovieForm

# Create your views here.

def movie_index(request):
    all_movies = Movie.objects.all()
    return render(request, 'movie/movie_index.html', context={"movies": all_movies})

def movie_deatil(request, pk):
    movie = Movie.objects.get(pk=pk)
    return render(request, 'movie/movie_detail.html', context={"movie": movie})

# def movie_create(request):
#     if request.method == "POST":
#         move_name = request.POST.get('name')
#         move_des = request.POST.get('desc')
#         likes = request.POST.get('likes')
#         Movie.objects.create(name=move_name, description=move_des, likes=likes)
#         return redirect("movie:movie-index")
#     return render(request, 'movie/movie_create.html')



def movie_create(request):
    form = MovieForm()
    if request.method == "POST":
        form = MovieForm(data=request.POST)
        if form.is_valid():
            form.save()
            return redirect("movie:movie-index")
    return render(request, 'movie/movie_create.html', context={
        'form': form
    })

def movie_update(request, pk):
    movie = Movie.objects.get(pk=pk)
    form = MovieForm(instance=movie)
    if request.method == "PUT":
        form = MovieForm(data=request.POST, instance=movie)
        if form.is_valid():
            form.save()
            return redirect("movie:movie-detail", pk=movie.id)
        
    return render(request, 'movie/movie_update.html', context={
        'form': form, 
        'movie': movie
    })

def movie_delete(request, pk):
    Movie.objects.get(pk=pk).delete()
    return redirect("movie:movie-index")
    