import 'package:flutter/material.dart';
import 'package:flutter/gestures.dart';
import 'package:flutter/services.dart';
import 'package:sandweches_admin/pages/Home.dart';
import 'package:sandweches_admin/types/user.dart';

class AddProduct extends StatefulWidget {
  final User userData;

  const AddProduct(this.userData, {super.key});

  @override
  State<AddProduct> createState() => _AddProduct();
}

class _AddProduct extends State<AddProduct> {
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
                  builder: (context) => HomePage(widget.userData),
                ),
              ),
            ),
            title: const Text('Aggiungi prodotti'),
            backgroundColor: Colors.orange,
          ),
          body: SingleChildScrollView(
            child: Padding(
              padding: const EdgeInsets.symmetric(horizontal: 10.0),
              child: Center(
                child: Form(
                  child: Padding(
                    padding: const EdgeInsets.only(top: 20.0),
                    child: Column(
                      children: [
                        Text(
                          'Dati prodotto:',
                          style: TextStyle(
                            fontWeight: FontWeight.bold,
                            fontSize: 20,
                          ),
                        ),
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
                              keyboardType: TextInputType.number,
                              inputFormatters: <TextInputFormatter>[
                                // for below version 2 use this
                                FilteringTextInputFormatter.allow(
                                    RegExp(r'[0-9]')),
                                // for version 2 and greater youcan also use this
                                FilteringTextInputFormatter.digitsOnly
                              ],
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
                              keyboardType: TextInputType.number,
                              inputFormatters: <TextInputFormatter>[
                                // for below version 2 use this
                                FilteringTextInputFormatter.allow(
                                    RegExp(r'[0-9]')),
                                // for version 2 and greater youcan also use this
                                FilteringTextInputFormatter.digitsOnly
                              ],
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
                              keyboardType: TextInputType.number,
                              inputFormatters: <TextInputFormatter>[
                                // for below version 2 use this
                                FilteringTextInputFormatter.allow(
                                    RegExp(r'[0-1]')),
                                // for version 2 and greater youcan also use this
                                FilteringTextInputFormatter.digitsOnly
                              ],
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Attivo (es. 0 = off, 1 = on)',
                              ),
                            ),
                          ),
                        ),
                        SizedBox(
                          height: 20,
                        ),
                        Text(
                          'Valori Nutrizionali:',
                          style: TextStyle(
                            fontWeight: FontWeight.bold,
                            fontSize: 20,
                          ),
                        ),
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
                              keyboardType: TextInputType.number,
                              inputFormatters: <TextInputFormatter>[
                                // for below version 2 use this
                                FilteringTextInputFormatter.allow(
                                    RegExp(r'[0-9]')),
                                // for version 2 and greater youcan also use this
                                FilteringTextInputFormatter.digitsOnly
                              ],
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Kcal',
                              ),
                            ),
                          ),
                        ),
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
                              keyboardType: TextInputType.number,
                              inputFormatters: <TextInputFormatter>[
                                // for below version 2 use this
                                FilteringTextInputFormatter.allow(
                                    RegExp(r'[0-9]')),
                                // for version 2 and greater youcan also use this
                                FilteringTextInputFormatter.digitsOnly
                              ],
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Grassi',
                              ),
                            ),
                          ),
                        ),
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
                              keyboardType: TextInputType.number,
                              inputFormatters: <TextInputFormatter>[
                                // for below version 2 use this
                                FilteringTextInputFormatter.allow(
                                    RegExp(r'[0-9]')),
                                // for version 2 and greater youcan also use this
                                FilteringTextInputFormatter.digitsOnly
                              ],
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Grassi saturi',
                              ),
                            ),
                          ),
                        ),
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
                              keyboardType: TextInputType.number,
                              inputFormatters: <TextInputFormatter>[
                                // for below version 2 use this
                                FilteringTextInputFormatter.allow(
                                    RegExp(r'[0-9]')),
                                // for version 2 and greater youcan also use this
                                FilteringTextInputFormatter.digitsOnly
                              ],
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Carboidrati',
                              ),
                            ),
                          ),
                        ),
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
                              keyboardType: TextInputType.number,
                              inputFormatters: <TextInputFormatter>[
                                // for below version 2 use this
                                FilteringTextInputFormatter.allow(
                                    RegExp(r'[0-9]')),
                                // for version 2 and greater youcan also use this
                                FilteringTextInputFormatter.digitsOnly
                              ],
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Zuccheri',
                              ),
                            ),
                          ),
                        ),
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
                              keyboardType: TextInputType.number,
                              inputFormatters: <TextInputFormatter>[
                                // for below version 2 use this
                                FilteringTextInputFormatter.allow(
                                    RegExp(r'[0-9]')),
                                // for version 2 and greater youcan also use this
                                FilteringTextInputFormatter.digitsOnly
                              ],
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Proteine',
                              ),
                            ),
                          ),
                        ),
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
                              keyboardType: TextInputType.number,
                              inputFormatters: <TextInputFormatter>[
                                // for below version 2 use this
                                FilteringTextInputFormatter.allow(
                                    RegExp(r'[0-9]')),
                                // for version 2 and greater youcan also use this
                                FilteringTextInputFormatter.digitsOnly
                              ],
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Fibre',
                              ),
                            ),
                          ),
                        ),
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
                              keyboardType: TextInputType.number,
                              inputFormatters: <TextInputFormatter>[
                                // for below version 2 use this
                                FilteringTextInputFormatter.allow(
                                    RegExp(r'[0-9]')),
                                // for version 2 and greater youcan also use this
                                FilteringTextInputFormatter.digitsOnly
                              ],
                              decoration: InputDecoration(
                                border: InputBorder.none,
                                hintText: 'Sale',
                              ),
                            ),
                          ),
                        ),
                        SizedBox(
                          height: 30,
                        ),
                        Padding(
                          padding: const EdgeInsets.symmetric(horizontal: 10.0),
                          child: Center(
                            child: ElevatedButton(
                              onPressed: () {
                                Navigator.push(
                                    context,
                                    MaterialPageRoute(
                                        builder: (context) =>
                                            (HomePage(widget.userData))));
                              },
                              style: ButtonStyle(
                                  shape: MaterialStateProperty.all(
                                      RoundedRectangleBorder(
                                          borderRadius:
                                              BorderRadius.circular(12))),
                                  backgroundColor:
                                      MaterialStateProperty.all<Color>(
                                          Colors.orange),
                                  shadowColor: MaterialStateProperty.all(
                                      Theme.of(context).colorScheme.onSurface),
                                  minimumSize: MaterialStateProperty.all(
                                      const Size(250, 50))),
                              child: const Text(
                                'Invia',
                                style: TextStyle(
                                  color: Colors.white,
                                  fontWeight: FontWeight.bold,
                                  fontSize: 20,
                                ),
                              ),
                            ),
                          ),
                        ),
                        SizedBox(
                          height: 20,
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
