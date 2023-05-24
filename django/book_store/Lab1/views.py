from django.shortcuts import redirect, render
from django.http import HttpResponse, JsonResponse, HttpResponseRedirect
from django.views.decorators.csrf import csrf_exempt
from .models import Book
from .forms import BookForm
# Create your views here.
def index(request):
    all_books = Book.objects.all()
    return render(request, 'book_store/book_list.html', context={"books": all_books})

    
def books_list(request):
    all_books = Book.objects.all()
    return render(request, 'book_store/books_list.html', context={"books": all_books})

def book_detail(request, pk):
    book = Book.objects.get(pk=pk)
    return render(request, 'book_store/book_details.html', context={"book": book})


def book_delete(request, pk):
    Book.objects.get(pk=pk).delete()
    return redirect('bookStore:books-list')   

def book_update(request, pk):
    book = Book.objects.get(pk=pk)
    form = BookForm(instance=book)
    if request.method == "PUT":
        form = BookForm(data=request.POST, instance=book)
        if form.is_valid():
            form.save()
            return redirect("bookStore:book-update", pk=book.id)
        
    return render(request, 'book_store/book_update.html', context={
        'form': form, 
        'book': book
    })


def create(request):
    form = BookForm()
    if request.method == "POST":
        form = BookForm(data=request.POST)
        if form.is_valid():
            form.save()
            return redirect("bookStore:books-list")
    return render(request, 'book_store/book_create.html', context={
        'form': form
    })