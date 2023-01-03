import 'package:flutter/material.dart';
import 'package:flutter/gestures.dart';
import 'package:sandweches_admin/pages/Home.dart';

void main() => runApp(const ViewOrder());

class ViewOrder extends StatelessWidget {
  const ViewOrder({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
        home: Scaffold(
          backgroundColor: Colors.grey[100],
          appBar: AppBar(
            title: const Text('Home'),
            backgroundColor: Colors.orange,
          ),
        ),
        debugShowCheckedModeBanner: false);
  }
}
