import 'package:flutter/material.dart';
import 'package:flutter/gestures.dart';
import 'package:sandweches_admin/pages/AddOffer.dart';
import 'package:sandweches_admin/pages/Login.dart';
import 'package:sandweches_admin/pages/SetProfile.dart';
import 'package:sandweches_admin/pages/ViewEfficiency.dart';
import 'package:sandweches_admin/pages/ViewOrder.dart';
import 'package:sandweches_admin/pages/AddProduct.dart';
import 'package:sandweches_admin/pages/AddPickup.dart';
import 'package:flutter/src/material/list_tile.dart';
import 'package:flutter/src/widgets/navigator.dart';
import 'package:sandweches_admin/types/user.dart';

class HomePage extends StatefulWidget {
  final User userData;

  const HomePage(this.userData, {super.key});

  @override
  State<HomePage> createState() => _Home();
}

class _Home extends State<HomePage> {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
        home: Scaffold(
          backgroundColor: Colors.grey[100],
          appBar: AppBar(
            title: const Text('Home'),
            backgroundColor: Colors.orange,
          ),
          body: LisTileExample(userData: widget.userData),
        ),
        debugShowCheckedModeBanner: false);
  }
}

class LisTileExample extends StatelessWidget {
  const LisTileExample({required this.userData});

  final User userData;

  @override
  Widget build(BuildContext context) {
    return ListView(
      children: <Widget>[
        Card(
            child: ListTile(
          title: Text('Opzioni:'),
        )),
        Card(
          child: ListTile(
            leading: Icon(
              Icons.add_shopping_cart,
              color: Colors.orange,
            ),
            title: Text('Visualizza Ordini'),
            subtitle:
                Text('Visualizza gli ordini che gli utenti hanno effettuato.'),
            trailing: Icon(
              Icons.arrow_right_alt,
              color: Colors.red,
            ),
            onTap: () {
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => ViewOrder(userData),
                ),
              );
            },
          ),
        ),
        Card(
          child: ListTile(
            leading: Icon(
              Icons.food_bank_outlined,
              color: Colors.orange,
            ),
            title: Text('Aggiungi prodotti'),
            subtitle: Text('Aggiungi nuovi prodotti al catalogo'),
            trailing: Icon(
              Icons.arrow_right_alt,
              color: Colors.red,
            ),
            onTap: () {
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => AddProduct(userData),
                ),
              );
            },
          ),
        ),
        Card(
          child: ListTile(
            leading: Icon(
              Icons.add_location_outlined,
              color: Colors.orange,
            ),
            title: Text('Aggiungi punto vendita'),
            subtitle: Text('Aggiungi un nuovo punto di consegna degli ordini'),
            trailing: Icon(
              Icons.arrow_right_alt,
              color: Colors.red,
            ),
            onTap: () {
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => AddPickup(userData),
                ),
              );
            },
          ),
        ),
        Card(
          child: ListTile(
            leading: Icon(
              Icons.discount_outlined,
              color: Colors.orange,
            ),
            title: Text('Crea offerta'),
            subtitle: Text('Aggiungi una nuovo offerta invitante'),
            trailing: Icon(
              Icons.arrow_right_alt,
              color: Colors.red,
            ),
            onTap: () {
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => AddOffer(userData),
                ),
              );
            },
          ),
        ),
        Card(
          child: ListTile(
            leading: Icon(
              Icons.euro,
              color: Colors.orange,
            ),
            title: Text('Visualizza rendimento'),
            subtitle: Text('Visualizza incassi e rendimenti degli ultimi mesi'),
            trailing: Icon(
              Icons.arrow_right_alt,
              color: Colors.red,
            ),
            onTap: () {
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => ViewEfficiency(userData),
                ),
              );
            },
          ),
        ),
        Card(
          child: ListTile(
            leading: Icon(
              Icons.person_outlined,
              color: Colors.orange,
            ),
            title: Text('Profilo'),
            subtitle: Text('Modifica la tua password e le tue informazioni'),
            trailing: Icon(
              Icons.arrow_right_alt,
              color: Colors.red,
            ),
            onTap: () {
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => SetProfile(userData),
                ),
              );
            },
          ),
        ),
        Card(
          child: ListTile(
            leading: Icon(
              Icons.logout_outlined,
              color: Colors.orange,
            ),
            title: Text('Log out'),
            subtitle: Text('Esci dal tuo profilo per ragioni di sicurezza'),
            trailing: Icon(
              Icons.arrow_right_alt,
              color: Colors.red,
            ),
            onTap: () {
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => Login(userData),
                ),
              );
            },
          ),
        ),
      ],
    );
  }
}
