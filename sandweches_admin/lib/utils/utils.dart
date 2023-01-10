import 'package:sandweches_admin/types/break.dart';
import 'package:sandweches_admin/types/pickup_break.dart';
import 'package:sandweches_admin/types/product.dart';
import 'package:sandweches_admin/types/tag.dart';
import 'package:sandweches_admin/types/product_tag.dart';
import 'package:sandweches_admin/types/ingredient.dart';
import 'package:sandweches_admin/types/user.dart';
import 'package:sandweches_admin/types/pickup.dart';

import 'dart:convert';
import 'endpoints.dart';
import 'dart:developer';
import 'package:dio/dio.dart';
import 'package:get/get.dart';

User parseGetUser(String responseBody) {
  List parsed = jsonDecode(responseBody);
  //log(parsed.toString());
  return parsed.map<User>((json) => User.fromJson(json)).toList()[0];
}
