from django.shortcuts import render
import openfoodfacts


def product_data(request, product_code):
    product_data = openfoodfacts.products.get_product(product_code)["product"]
    product_name = product_data["product_name"]
    product_image = product_data["selected_images"]["front"]["display"]["fr"]

    context = {'product_name': product_name, 'product_image': product_image}
    return render(request, 'product_data.html', context)
