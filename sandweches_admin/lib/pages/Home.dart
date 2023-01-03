import 'package:flutter/material.dart';
import 'package:flutter/gestures.dart';
import 'package:sandweches_admin/pages/ViewOrder.dart';
import 'package:flutter/src/material/list_tile.dart';
import 'package:flutter/src/widgets/navigator.dart';

class HomePage extends StatefulWidget {
  const HomePage({Key? key}) : super(key: key);

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
          body: const LisTileExample(),
        ),
        debugShowCheckedModeBanner: false);
  }
}

class LisTileExample extends StatelessWidget {
  const LisTileExample({super.key});

  @override
  Widget build(BuildContext context) {
    return ListView(
      children: const <Widget>[
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
          ),
        ),
        Card(
          child: ListTile(
              leading: Icon(
                Icons.add_location_outlined,
                color: Colors.orange,
              ),
              title: Text('Aggiungi punto vendita'),
              subtitle:
                  Text('Aggiungi un nuovo punto di consegna degli ordini'),
              trailing: Icon(
                Icons.arrow_right_alt,
                color: Colors.red,
              ),
              isThreeLine: false),
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
              isThreeLine: false),
        ),
        Card(
          child: ListTile(
              leading: Icon(
                Icons.euro,
                color: Colors.orange,
              ),
              title: Text('Visualizza rendimento'),
              subtitle:
                  Text('Visualizza incassi e rendimenti degli ultimi mesi'),
              trailing: Icon(
                Icons.arrow_right_alt,
                color: Colors.red,
              ),
              isThreeLine: false),
        ),
        Card(
          child: ListTile(
              leading: Icon(
                Icons.query_stats_outlined,
                color: Colors.orange,
              ),
              title: Text('Visualizza statistiche'),
              subtitle: Text('Visualizza le statistiche più interessanti'),
              trailing: Icon(
                Icons.arrow_right_alt,
                color: Colors.red,
              ),
              isThreeLine: false),
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
              isThreeLine: false),
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
              isThreeLine: false),
        )
      ],
    );
  }
}
