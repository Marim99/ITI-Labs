from django.urls import path
from .views import index, books_list, book_detail, book_delete, book_update,create
app_name = 'bookStore'

urlpatterns = [
    path('', books_list, name='index'),
    path('book_list/', books_list, name="books-list"),
    path('<int:pk>/detail', book_detail, name="book-detail"),
    path('<int:pk>/delete', book_delete, name="book-delete"),
    path('<int:pk>/update', book_update, name="book-update"),
    path('create_new_task/', create, name="book-create"),
]