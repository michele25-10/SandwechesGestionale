import 'package:flutter/material.dart';

class Home extends StatelessWidget {
  const Home({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Sandweches',
      home: Scaffold(
        appBar: AppBar(
          title: const Text('Sandweches'),
        ),
        body: const Center(
          child: Text('Ciuppa'),
        ),
      ),
    );
  }
}
