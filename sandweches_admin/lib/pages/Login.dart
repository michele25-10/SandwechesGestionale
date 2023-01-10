import 'package:flutter/material.dart';
import 'package:flutter/gestures.dart';
import 'package:sandweches_admin/pages/Home.dart';
import 'package:sandweches_admin/utils/login_controller.dart';
import 'package:sandweches_admin/types/user.dart';

class Login extends StatefulWidget {
  final User userData;
  const Login({super.key});

  @override
  State<Login> createState() => _LoginPageState();
}

class _LoginPageState extends State<Login> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.grey[200],
      body: SafeArea(
        child: Center(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Container(
                child: Image.asset(
                  "lib/assets/images/app_logo.png",
                  fit: BoxFit.cover,
                ),
              ),
              //IMG
              SizedBox(
                height: 50,
              ),
              Text(
                'Effettua il tuo accesso',
                style: TextStyle(
                  fontWeight: FontWeight.bold,
                  fontSize: 24,
                ),
              ),

              //email textfield
              SizedBox(
                height: 20,
              ),
              Padding(
                padding: const EdgeInsets.symmetric(horizontal: 25.0),
                child: Container(
                  decoration: BoxDecoration(
                    color: Colors.grey[100],
                    border: Border.all(color: Colors.redAccent),
                    borderRadius: BorderRadius.circular(12),
                  ),
                  child: Padding(
                    padding: const EdgeInsets.only(left: 20.0),
                    child: TextField(
                      decoration: InputDecoration(
                        border: InputBorder.none,
                        hintText: 'Email',
                      ),
                      controller: signInController.emailController,
                    ),
                  ),
                ),
              ),

              //password textfield
              SizedBox(
                height: 10,
              ),
              Padding(
                padding: const EdgeInsets.symmetric(horizontal: 25.0),
                child: Container(
                  decoration: BoxDecoration(
                    color: Colors.grey[100],
                    border: Border.all(color: Colors.redAccent),
                    borderRadius: BorderRadius.circular(12),
                  ),
                  child: Padding(
                    padding: const EdgeInsets.only(left: 20.0),
                    child: TextField(
                      obscureText: true,
                      decoration: InputDecoration(
                        border: InputBorder.none,
                        hintText: signInController.passwordHintText[
                            signInController.isShowPassword.value],
                      ),
                      controller: signInController.passwordController,
                    ),
                  ),
                ),
              ),
              //sign in button
              SizedBox(
                height: 20,
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
                        shape: MaterialStateProperty.all(RoundedRectangleBorder(
                            borderRadius: BorderRadius.circular(12))),
                        backgroundColor:
                            MaterialStateProperty.all<Color>(Colors.orange),
                        shadowColor: MaterialStateProperty.all(
                            Theme.of(context).colorScheme.onSurface),
                        minimumSize:
                            MaterialStateProperty.all(const Size(250, 50))),
                    child: const Text(
                      'Accedi',
                      style: TextStyle(
                        color: Colors.white,
                        fontWeight: FontWeight.bold,
                        fontSize: 20,
                      ),
                    ),
                  ),
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
