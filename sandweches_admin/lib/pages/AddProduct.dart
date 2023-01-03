import 'package:flutter/material.dart';
import 'package:flutter/gestures.dart';
import 'package:sandweches_admin/pages/Home.dart';

void main() => runApp(const AddProduct());

class AddProduct extends StatelessWidget {
  const AddProduct({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
        home: Scaffold(
          backgroundColor: Colors.grey[100],
          appBar: AppBar(
            leading: IconButton(
              icon: Icon(Icons.arrow_back, color: Colors.white),
              onPressed: () => Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => HomePage(),
                ),
              ),
            ),
            title: const Text('Aggiungi prodotti'),
            backgroundColor: Colors.orange,
          ),
          body: SafeArea(
            child: Padding(
              padding: const EdgeInsets.symmetric(horizontal: 10.0),
              child: Center(
                child: Form(
                  child: Padding(
                    padding: const EdgeInsets.only(top: 20.0),
                    child: Column(
                      children: [
                        SizedBox(
                          height: 20,
                        ),
                        Container(
                          decoration: BoxDecoration(
                            border: Border.all(color: Colors.redAccent),
                            borderRadius: BorderRadius.circular(12),
                          ),
                          child: Padding(
                            padding: const EdgeInsets.only(left: 20.0),
                            child: TextField(
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Nome prodotto',
                              ),
                            ),
                          ),
                        ),
                        SizedBox(
                          height: 10,
                        ),
                        Container(
                          decoration: BoxDecoration(
                            border: Border.all(color: Colors.redAccent),
                            borderRadius: BorderRadius.circular(12),
                          ),
                          child: Padding(
                            padding: const EdgeInsets.only(left: 20.0),
                            child: TextField(
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Prezzo',
                              ),
                            ),
                          ),
                        ),
                        SizedBox(
                          height: 10,
                        ),
                        Container(
                          decoration: BoxDecoration(
                            border: Border.all(color: Colors.redAccent),
                            borderRadius: BorderRadius.circular(12),
                          ),
                          child: Padding(
                            padding: const EdgeInsets.only(left: 20.0),
                            child: TextField(
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Descrizione',
                              ),
                            ),
                          ),
                        ),
                        SizedBox(
                          height: 10,
                        ),
                        Container(
                          decoration: BoxDecoration(
                            border: Border.all(color: Colors.redAccent),
                            borderRadius: BorderRadius.circular(12),
                          ),
                          child: Padding(
                            padding: const EdgeInsets.only(left: 20.0),
                            child: TextField(
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Quantità',
                              ),
                            ),
                          ),
                        ),
                        SizedBox(
                          height: 10,
                        ),
                        Container(
                          decoration: BoxDecoration(
                            border: Border.all(color: Colors.redAccent),
                            borderRadius: BorderRadius.circular(12),
                          ),
                          child: Padding(
                            padding: const EdgeInsets.only(left: 20.0),
                            child: TextField(
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Attivo (es. 0 = off, 1 = on)',
                              ),
                            ),
                          ),
                        ),
                      ],
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        debugShowCheckedModeBanner: false);
  }
}
