<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    // Метод для відображення корзини
    public function index()
    {
//        session()->forget('cart');
        $cart = session()->get('cart', []);

        return view('__shop.cart.index', compact('cart'))->with(['data' => $this->data]);
    }

    // Метод для додавання товару до корзини
    public function add(Request $request, $productId)
    {
        $data = $request->validate(['size' => 'required|integer|min:1|max:50', ]);

        $product = Product::findOrFail($productId); // Знайти товар за ID або викинути помилку

        $cart = session()->get('cart', []); // Отримати корзину з сесії або створити нову, якщо її не існує

        // Перевірити, чи товар вже є в корзині
        if(isset($cart[$productId])) {
            // Якщо так, просто збільшити кількість
            $cart[$productId]['quantity']++;
        } else {
            // Якщо ні, додати товар з кількістю 1
            $cart[$productId] = [
                "id" => $product->id,
                "title" => $product->title,
                "quantity" => 1,
                "size" => $data['size'],
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Товар додано до корзини!');
    }


    // Метод для оновлення товару в корзині
    public function update()
    {
        dd('тут буде продовження');
    }


    // Метод для видалення товару з корзини
    public function remove($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Товар успішно видалений з корзини.');
    }
}
