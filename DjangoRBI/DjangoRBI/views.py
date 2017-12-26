from django.http import HttpResponse, Http404
from django.contrib.auth.models import User
from polls import  models;
from django.shortcuts import render_to_response;

def user_page(request, username):
    try:
       user = User.objects.get(username=username)
    except:
       raise Http404('Requested user not found.')
    product = user.product_set.all()

def display_all_api(request):
    data = models.ApiComponentType.objects.all();
    return render_to_response('home/index.html', {'obj':data});