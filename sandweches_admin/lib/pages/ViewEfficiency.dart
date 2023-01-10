import 'package:flutter/material.dart';
import 'package:flutter/gestures.dart';
import 'package:sandweches_admin/pages/Home.dart';
import 'package:sandweches_admin/types/user.dart';

class ViewEfficiency extends StatefulWidget {
  final User userData;

  const ViewEfficiency(this.userData, {super.key});

  @override
  State<ViewEfficiency> createState() => _ViewEfficiency();
}

class _ViewEfficiency extends State<ViewEfficiency> {
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
            title: const Text('Rendimento'),
            backgroundColor: Colors.orange,
          ),
        ),
        debugShowCheckedModeBanner: false);
  }
}
