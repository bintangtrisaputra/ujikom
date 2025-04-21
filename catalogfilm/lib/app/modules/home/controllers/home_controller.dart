import 'dart:async';

import 'package:catalogfilm/app/modules/login/views/login_view.dart';
import 'package:get/get.dart';

class HomeController extends GetxController {
  var _pindah;

  //TODO: Implement HomeController

  @override
  void onInit() {
    _pindah = Timer.periodic(
  const Duration(seconds: 4),
  (timer) => Get.off(
    () => const LoginView(),
    transition: Transition.leftToRight,
  ),
);
    super.onInit();
  }

  @override
  void onReady() {
    super.onReady();
  }

  @override
  void onClose() {
    super.onClose();
    _pindah.cancel();
  }

}
