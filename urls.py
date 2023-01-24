from django.urls import path
from . import views

urlpatterns = [
    path('product_data/<str:product_code>/',
         views.product_data, name='product_data'),
]
