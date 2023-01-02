import 'package:flutter/material.dart';
import 'package:sandweches_admin/pages/Login.dart';

void main() {
  runApp(const myApp());
}

// ignore: camel_case_types
class myApp extends StatelessWidget {
  const myApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Sandwech',
      theme: ThemeData(
        primarySwatch: Colors.red, //fabulous
      ),
      home: Login(),
      debugShowCheckedModeBanner: false,
    );
  }
}
