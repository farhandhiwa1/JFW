// ignore_for_file: unused_field, prefer_const_constructors, avoid_print

        import 'dart:convert';
        
        import 'package:flutter/material.dart';
        import 'package:http/http.dart' as http;
        
        class Add extends StatefulWidget {
          const Add({Key? key}) : super(key: key);
        
          @override
          State<Add> createState() => _AddState();
        }
        
        class _AddState extends State<Add> {
          final _formKey = GlobalKey<FormState>();
        
          //inisialize field
          var title = TextEditingController();
          var descr = TextEditingController();
          var gambar = TextEditingController();
          var linknews = TextEditingController();
        
          Future _onSubmit() async {
            try {
              return await http.post(
                Uri.parse("http://192.168.1.2/flutter_jfw/create.php"),
                body: {
                  "title": title.text,
                  "descr": descr.text,
                  "gambar": gambar.text,
                  "linknews": linknews.text,
                },
              ).then((value) {
                //print message after insert to database
                //you can improve this message with alert dialog
                var data = jsonDecode(value.body);
                print(data["message"]);
        
                Navigator.of(context)
                    .pushNamedAndRemoveUntil('/', (Route<dynamic> route) => false);
              });
            } catch (e) {
              print(e);
            }
          }
        
          @override
          Widget build(BuildContext context) {
            return Scaffold(
              appBar: AppBar(
                title: Text("Create New News"),
              ),
              body: Form(
                key: _formKey,
                child: Container(
                  padding: EdgeInsets.all(20.0),
                  child: Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: [
                      Text(
                        'Title',
                        style: TextStyle(
                          color: Colors.white,
                          fontSize: 16,
                          fontWeight: FontWeight.bold,
                        ),
                      ),

                      SizedBox(height: 5),
                      TextFormField(
                        controller: title,
                        decoration: InputDecoration(
                            hintText: "Type News Title",
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(15.0),
                            ),
                            fillColor: Colors.white,
                            filled: true),
                        style: const TextStyle(
                          fontWeight: FontWeight.bold,
                          fontSize: 16,
                        ),
                        validator: (value) {
                          if (value!.isEmpty) {
                            return 'Note Title is Required!';
                          }
                          return null;
                        },
                      ),

                      SizedBox(height: 20),
                      Text(
                        'Desc',
                        style: TextStyle(
                          color: Colors.white,
                          fontSize: 16,
                          fontWeight: FontWeight.bold,
                        ),
                      ),

                      SizedBox(height: 5),
                      TextFormField(
                        controller: descr,
                        keyboardType: TextInputType.multiline,
                        minLines: 5,
                        maxLines: null,
                        decoration: InputDecoration(
                            hintText: 'Type News Desc',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(15.0),
                            ),
                            fillColor: Colors.white,
                            filled: true),
                        style: const TextStyle(
                          fontWeight: FontWeight.bold,
                          fontSize: 16,
                        ),
                        validator: (value) {
                          if (value!.isEmpty) {
                            return 'Note Content is Required!';
                          }
                          return null;
                        },
                      ),
                      SizedBox(height: 20),
                      Text(
                        'Gambar',
                        style: TextStyle(
                          color: Colors.white,
                          fontSize: 16,
                          fontWeight: FontWeight.bold,
                        ),
                      ),

                      SizedBox(height: 5),
                      TextFormField(
                        controller: gambar,
                        keyboardType: TextInputType.multiline,
                        maxLines: null,
                        decoration: InputDecoration(
                            hintText: 'Type News gambar (Kosongkan kalau tidak yakin)',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(15.0),
                            ),
                            fillColor: Colors.white,
                            filled: true),
                        style: const TextStyle(
                          fontWeight: FontWeight.bold,
                          fontSize: 16,
                        ),
                      ),

                      SizedBox(height: 20),
                      Text(
                        'Link',
                        style: TextStyle(
                          color: Colors.white,
                          fontSize: 16,
                          fontWeight: FontWeight.bold,
                        ),
                      ),

                      SizedBox(height: 5),
                      TextFormField(
                        controller: linknews,
                        keyboardType: TextInputType.multiline,
                        maxLines: null,
                        decoration: InputDecoration(
                            hintText: 'Link news',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(15.0),
                            ),
                            fillColor: Colors.white,
                            filled: true),
                        style: const TextStyle(
                          fontWeight: FontWeight.bold,
                          fontSize: 16,
                        ),
                      ),

                      SizedBox(height: 15),
                      ElevatedButton(
                        style: ElevatedButton.styleFrom(
                          shape: RoundedRectangleBorder(
                            borderRadius: BorderRadius.circular(15),
                          ),
                        ),
                        child: Text(
                          "Submit",
                          style: TextStyle(color: Colors.white),
                        ),
                        onPressed: () {
                          //validate
                          if (_formKey.currentState!.validate()) {
                            //send data to database with this method
                            _onSubmit();
                          }
                        },
                      )
                    ],
                  ),
                ),
              ),
            );
          }
        }