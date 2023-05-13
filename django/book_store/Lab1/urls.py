from django.urls import path
from .views import index, books_list, book_detail, book_delete, book_update,create_new_task
app_name = 'bookStore'

urlpatterns = [
    path('', books_list, name='index'),
    path('book_list/', books_list, name="books-list"),
    path('book_detail/<int:task_id>', book_detail, name="book-detail"),
    path('book_delete/<int:task_id>', book_delete, name="book-delete"),
    path('book_update/<int:task_id>', book_update, name="book-update"),
    path('create_new_task/>', create_new_task, name="book-create"),
]