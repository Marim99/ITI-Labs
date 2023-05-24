from django.forms import ModelForm, TextInput, NumberInput
from .models import Book

from django import forms
# from django.forms import ModelForm, TextInput, EmailInput

class BookForm(ModelForm):
    class Meta:
        model = Book
        fields = ['name', 'description', 'pages','rate']
        widgets = {
            'name': TextInput(attrs={
                'class': "form-control",
                'style': 'max-width: 300px;',
                'placeholder': 'Name'
                }),
            'description': TextInput(attrs={
                'class': "form-control", 
                'style': 'max-width: 300px;',
                'placeholder': 'description'
                }),
            'pages': NumberInput(attrs={
                'class': "form-control", 
                'style': 'max-width: 300px;',
                'placeholder': 'pages number'
                }),    
            'rate': NumberInput(attrs={
                'class': "form-control", 
                'style': 'max-width: 300px;',
                'placeholder': 'rate'
                })    

        }