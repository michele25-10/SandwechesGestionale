import 'package:flutter/material.dart';

void main() => runApp(const Home());

class Home extends StatelessWidget {
  const Home({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(
          title: const Text('Home'),
          backgroundColor: Colors.orange,
        ),
        body: const LisTileExample(),
      ),
    );
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
              subtitle: Text(
                  'Visualizza gli ordini che gli utenti hanno effettuato.'),
              trailing: Icon(
                Icons.arrow_right_alt,
                color: Colors.red,
              ),
              isThreeLine: false),
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
            isThreeLine: false,
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
        )
      ],
    );
  }
}
