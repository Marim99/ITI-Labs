from django.shortcuts import redirect, render
from django.http import HttpResponse, JsonResponse, HttpResponseRedirect

# Create your views here.
def index(request):
    # print(request.body)
    # print(request.method)
    # print(request.path)
    # print(request.GET)
    # print(request.POST)
    # print(request.COOKIES)
    # print(request.FILES)
    # print(request.META)
    # render (requst, template name, context=None, content_type=None)
    # redirect (to, *args, **kwargs)
    # redirect('/profile' , {'nick_name': 'iti'})
    #localhost:8000/profile 
    # res = HttpResponse("hello world")
    # res.write("<p> Hello OS </>")
    # res['content-type'] = 'text/plain'
    # return res
    # # return JsonResponse({'Track': 'OS'})
    # return HttpResponseRedirect('/')
    return render(request, 'base_layout.html')
    pass


book_list = [
    {
        'index': 0,
        'id': 1,
        'name': 'Book-1',
        'priority': 1,
        'description': "Learning Learnin gJSfffjk dfjdklg jkdgjdkgjdkgjd kgjdkgjdglk ",
    },
    {
        'index': 1,
        'id': 2,
        'name': 'Book-2',
        'priority': 4,
        'description': "Learning LearningJS fffjkdfjd klgjkdgjdkgjdkgjdkgjd kgjdglkjdgk ljfj fjejekgjekgjekgjekgjgekjgek",
    },
    {
        'index': 2,
        'id': 3,
        'name': 'Book-3',
        'priority': 2,
        'description': "LearningJS fffjk dfjdklgjkdg jdkgjdkgjd kgjdkgjdglkjdgkl jfjfjejekg jekgjekgjekgjgekjgek",
    },
]


def _get_book(book_id):
    for book in book_list:
        if 'id' in book and book['id'] == book_id:
            return book
    return None
    
def books_list(request):
    my_context = {'book_list': book_list}
    # template_loader > todo/templates/
    return render(request, 'book_store/books_list.html', context=my_context)

def book_detail(request, *args, **kwrgs):
    task_id = kwrgs.get('task_id')
    task_object = _get_book(task_id)
    my_context = {
        'task_id': task_object.get('id'),
        'task_name': task_object.get('name'),
        'task_priority': task_object.get('priority'),
        'task_description': task_object.get('description')
    }

    return render(request, 'book_store/book_details.html', context=my_context)


def book_delete(request, **kwargs):
    task_id = kwargs.get('task_id')
    task_object = _get_task(task_id)
    if book_list:
        book_list.remove(task_object)
    return redirect('bookStore:books-list')   

def book_update(request, **kwargs):
    task_id = kwargs.get('task_id')
    task_object = _get_task(task_id)
    for book in book_list:
        if book == task_object:
            book['name'] = f"Update {task_object['name']}"


def create_new_task(request):
    # Find the highest existing index and add 1 to get the new index
    new_index = max(book['index'] for book in book_list) + 1
    
    # Create a new task dictionary
    new_task = {
        'index': new_index,
        'id': new_index + 1,
        'name':"book" + str(new_index),
        'priority': 3,
        'description': "description",
    }
    
    # Add the new task to the task list
    book_list.append(new_task)
    
    # Print a message to confirm that the task was added
    return redirect('bookStore:books-list') 
